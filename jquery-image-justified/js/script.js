$(document).ready(function() {
	$img = $('img');
	$imgCount = $img.length;
	containerWidth = $('#main').width();
	console.log(containerWidth);
	padding = $img.eq(0).outerWidth() - $img.eq(0).width();

	getNextIndex = function ($start) {
		var width = 0;

		for (i = $start; i < $imgCount; i++) {
			width += $img.eq(i).outerWidth();

			if (width >= containerWidth) {
				return i;
			}
		}

		return $imgCount;
	};

	getWidth = function (start, end) {
		width = 0;

		for (i = start; i <= end; i++) {
			width += $img.eq(i).width();
		}

		return width;
	}

	adjustImages = function (start, end) {
		adjustmentRatio = (containerWidth - (padding * (end - start + 1))) / (getWidth(start, end));

		console.log('adjusting by: ' + adjustmentRatio);

		for (i = start; i <= end; i++) {
			$img.eq(i).height($img.eq(i).height() * adjustmentRatio);
		}
		return true;
	}

	$startIndex = 0;
	$endIndex = getNextIndex($startIndex);
	console.log('start: ' + $startIndex);
	console.log('end: ' + $endIndex);

	while ($endIndex < $imgCount) {
		adjustImages($startIndex, $endIndex);

		$startIndex = $endIndex + 1;
		$endIndex = getNextIndex($startIndex);
		console.log('start: ' + $startIndex);
		console.log('end: ' + $endIndex);
	}
});
