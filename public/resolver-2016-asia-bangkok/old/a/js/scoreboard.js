// config
var resultsUrl = 'http://localhost/acm-scoreboard/scoreboard.json';
var refreshInterval = 2000;

// global vars
var problemsCount = -1;
var teamTemplate;

$(function () {

	fetchAndShow();
	setInterval(fetchAndShow, refreshInterval);

	function initScoreBoard() {
		for (var i = 0; i < problemsCount; i++) {
			var letter = toLetters(i + 1);
			$('#table-head').append('<th class="scoreboard-problem scoreboard-problem-' + letter + '">' + letter + '</th>');
			$('#table-head-summary').append('<td class="scoreboard-problem scoreboard-problem-' + letter + '">' + letter + '</th>');
			$('#row-solved').append('<td><span class="scoreboard-point" id="count-solved-' + letter + '">0</span></td>');
			$('#row-tries').append('<td><span class="scoreboard-point" id="count-tries-' + letter + '">0</span></td>');
			$('#row-percent').append('<td><span class="scoreboard-point" id="percent-solved-' + letter + '">0</span></td>');
		}

		var templateHtml = '<tr>' +
		'<th class="scoreboard-rank">{{rank}}</th>' +
		'<th class="scoreboard-team">{{name}}</th>' +
		'<th class="scoreboard-score-count">{{solved}}</th>' +
		'<td class="scoreboard-score-total">{{points}}</td>';
		for (var i = 0; i < problemsCount; i++) {
			var letter = toLetters(i + 1);
			templateHtml += '<td class="scoreboard-point scoreboard-{{' + letter + '.s}}">';
			templateHtml += '{{' + letter + '.a}}{{#if ' + letter + '.t}} / ';
			templateHtml += '{{' + letter + '.t}}{{/if}}</td>'
		}
		templateHtml += '</tr>';
		teamTemplate = Handlebars.compile(templateHtml);
	}

	function fetchAndShow () {
		$.get(resultsUrl, function (data) {
			// if not table is not inited
			if (problemsCount < 0) {
				// find # problems from received json
				problemsCount = Object.keys(data.solved).length;
				initScoreBoard();
			}

			var scoreboardHtml = '';
			data.scoreboard.sort(function (a, b) {
				return a.rank - b.rank;
			});
			for(var i = 0; i < data.scoreboard.length; i++) {
				scoreboardHtml += teamTemplate(data.scoreboard[i]);
			}
			for (problem in data.solved) {
				$('#count-solved-' + problem).text(data.solved[problem]);
				$('#count-tries-' + problem).text(data.attempted[problem]);
				$('#percent-solved-' + problem).text(
					(data.solved[problem] / data.attempted[problem] * 100).toFixed(1) + "%"
				);
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
