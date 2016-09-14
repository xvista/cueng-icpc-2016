// config
var resultsUrl = 'scoreboard.final.json';
var refreshInterval = 0;

// global vars
var problemsCount = -1;
var teamTemplate;

// global function
var fetchAndShow = null;

$(function () {
	fetchAndShow = function () {
		$.get(resultsUrl, function (data) {
			// if not table is not inited
			if (problemsCount < 0) {
				// find # problems from received json
				problemsCount = Object.keys(data.solved).length;
				if (problemsCount === 0) {
					$("#notrunning").show();
				    return;
			    } else {
				    $("#scoreboard-content").show();
			    }
				initScoreBoard();
			} else {
				if (problemsCount !== Object.keys(data.solved).length) {
					location.reload();
					return;
				}
			}

			var scoreboardHtml = '';
			var attemptsCount = {};
			var attemptsCountSolved = {};
			var teamCount = {};
			var teamCountSolved = {};

			data.scoreboard.sort(function (a, b) {
				return a.rank - b.rank;
			});
			for (problem in data.solved) {
				attemptsCount[problem] = 0;
				attemptsCountSolved[problem] = 0;
				teamCount[problem] = 0;
				teamCountSolved[problem] = 0;
			}
			for (var i = 0; i < data.scoreboard.length; i++) {
				var sumScore = 0;
				for (problem in data.solved) {
					if (data.scoreboard[i][problem].a > 0) {
						attemptsCount[problem] += data.scoreboard[i][problem].a;
						teamCount[problem]++;
						if (data.scoreboard[i][problem].s == "first" || data.scoreboard[i][problem].s == "solved") {
							teamCountSolved[problem]++;
							attemptsCountSolved[problem] += data.scoreboard[i][problem].a;
						}


						var probStatus = data.scoreboard[i][problem];
						if (data.scoreboard[i][problem].s == "first" || data.scoreboard[i][problem].s == "solved") {
							sumScore += (parseInt(probStatus.t) + (parseInt(probStatus.a) - 1) * 20);
						}
					}
				}
				data.scoreboard[i].points = sumScore;
			}

			data.scoreboard.sort(function (a, b) {
				if (a.solved - b.solved !== 0) {
					return b.solved - a.solved;
				} else {
					return a.points - b.points;
				}
			});

			for (var i = 0; i < data.scoreboard.length; i++) {
				data.scoreboard[i].rank = i + 1;
				scoreboardHtml += teamTemplate(data.scoreboard[i]);
			}

			for (problem in data.solved) {
				var solvedTriesText = data.solved[problem] + "/" + data.attempted[problem];
				if (data.attempted[problem] > 0) {
					solvedTriesText += " (" + (data.solved[problem] / data.attempted[problem] * 100).toFixed(1) + "%)";
				}
				var avgTriesText = "--";
				if (teamCount[problem] > 0) {
					avgTriesText = (attemptsCount[problem] / teamCount[problem]).toFixed(2);
				}
				var avgTriesSolvedText = "--";
				if (teamCountSolved[problem] > 0) {
					avgTriesSolvedText = (attemptsCountSolved[problem] / teamCountSolved[problem]).toFixed(2);
				}
				$('#solved-tries-' + problem).text(solvedTriesText);
				$('#avg-tries-' + problem).text(avgTriesText);
				$('#avg-tries-solved-' + problem).text(avgTriesSolvedText);
			}
			$('#scoreboard-body').html(scoreboardHtml);
		}).fail(function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest);
			console.log(textStatus);
			console.log(errorThrown);
		});
	};

	fetchAndShow();
    if (refreshInterval > 0) {
		setInterval(fetchAndShow, refreshInterval);
	}

	function initScoreBoard() {
		for (var i = 0; i < problemsCount; i++) {
			var letter = toLetters(i + 1);
			$('#table-head').append('<th class="scoreboard-problem scoreboard-problem-' + letter + '">' + letter + '</th>');
			$('#table-head-summary').append('<td class="scoreboard-problem scoreboard-problem-' + letter + '">' + letter + '</th>');
			$('#row-solvedtries').append('<td><span class="scoreboard-point" id="solved-tries-' + letter + '">0/0</span></td>');
			$('#row-avgtries').append('<td><span class="scoreboard-point" id="avg-tries-' + letter + '">--</span></td>');
			$('#row-avgtriessolved').append('<td><span class="scoreboard-point" id="avg-tries-solved-' + letter + '">--</span></td>');
		}

		var templateHtml = '<tr>' +
		'<th class="scoreboard-rank">{{rank}}</th>' +
		'<th class="scoreboard-team">{{name}}</th>' +
		'<th class="scoreboard-score-count">{{solved}}</th>' +
		'<td class="scoreboard-score-total">{{points}}</td>';
		for (var i = 0; i < problemsCount; i++) {
			var letter = toLetters(i + 1);
			templateHtml += '<td class="scoreboard-point scoreboard-{{' + letter + '.s}}">';
			templateHtml += '{{#if ' + letter + '.a}}{{' + letter + '.a}}{{#if ' + letter + '.t}} (';
			templateHtml += '{{' + letter + '.t}}){{/if}}{{/if}}</td>'
		}
		templateHtml += '</tr>';
		teamTemplate = Handlebars.compile(templateHtml);
	}

	function toLetters(num) {
		var mod = num % 26,
			pow = num / 26 | 0,
			out = mod ? String.fromCharCode(64 + mod) : (--pow, 'Z');
		return pow ? toLetters(pow) + out : out;
	}
});
