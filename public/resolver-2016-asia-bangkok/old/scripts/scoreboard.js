var resultsUrl = 'http://localhost/acm-scoreboard/scoreboard.json';
var refreshInterval = 2000;
var problemsCount = 12;

$(function () {

	for (var i = 0; i < problemsCount; i++) {
		var letter = toLetters(i + 1);
		$('#table-head').append('<th>' + letter + '</th>');
		$('#table-head-summary').append('<th>' + letter + '</th>');
		$('#row-solved').append('<td>' +
			'<span id="count-solved-' + letter + '">0</span>/<span id="count-tries-' + letter + '">0</span>' +
			'<br><span id="percent-solved-' + letter + '">0</span>%' +
			'</td>'
		);
		$('#row-tries').append('<td><span id="count-tries-' + letter + '">0</span></td>');
		$('#row-tries-to-solve').append('<td><span id="count-tries-to-solve' + letter + '">0</span></td>');
	}

	var templateHtml = '<tr>' +
	'<th>{{rank}}</th>' +
	'<th>{{name}}</th>' +
	'<th>{{solved}}</th>' +
	'<td>{{points}}</td>';
	for (var i = 0; i < problemsCount; i++) {
		var letter = toLetters(i + 1);
		templateHtml += '<td class="scoreboard-{{' + letter + '.s}}">';
		templateHtml += '{{' + letter + '.a}}{{#if ' + letter + '.t}}<br>';
		templateHtml += '<span class="small">{{' + letter + '.t}}</span>{{/if}}</td>'
	}
	templateHtml += '</tr>';
	var teamTemplate = Handlebars.compile(templateHtml);

	fetchAndShow();
	setInterval(fetchAndShow, refreshInterval);

	function fetchAndShow () {
		$.get(resultsUrl, function (data) {
			var scoreboardHtml = '';
			data.scoreboard.sort(function (a, b) {
				return a.rank - b.rank;
			});
			for(var i = 0; i < data.scoreboard.length; i++) {
				scoreboardHtml += teamTemplate(data.scoreboard[i]);
				// for (problem in data.solved) {
				// 	var status = data.scoreboard[i][problem];
				// 	if (status.s == "first" || status.s == "solved")
				// 		sumSolved[problem]++;
				// 		// count attempted / team solved
				// 	sumTries[problem] += parseInt(status.a);
				// }
			}
			for (problem in data.solved) {
				$('#count-solved-' + problem).text(data.solved[problem]);
				$('#count-tries-' + problem).text(data.attempted[problem]);
				$('#percent-solved-' + problem).text((data.solved[problem] / data.attempted[problem] * 100).toFixed(1));
			}
			$('#scoreboard-body').html(scoreboardHtml);
		}).fail(function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest);
			console.log(textStatus);
			console.log(errorThrown);
		});
	}

	function toLetters(num) {
		var mod = num % 26,
			pow = num / 26 | 0,
			out = mod ? String.fromCharCode(64 + mod) : (--pow, 'Z');
		return pow ? toLetters(pow) + out : out;
	}
});
