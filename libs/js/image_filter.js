/**
 * Created by David on 8/8/2017.
 */
function imgFilter() {
    var image = document.getElementById('demoImg');
    var grayscale = document.getElementById('Grayscale').value;
    var Sepia = document.getElementById('Sepia').value;
    var Saturate = document.getElementById('Saturate').value;
    var HueRotate = document.getElementById('HueRotate').value;
    var Invert = document.getElementById('Invert').value;
    var Opacity = document.getElementById('Opacity').value;
    var Brightness = document.getElementById('Brightness').value;
    var Contrast = document.getElementById('Contrast').value;
    var Blur = document.getElementById('Blur').value;
    var CssCode = document.getElementById('cssCode');
    image.style = "filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px)";
    image.style = "-o-filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px)";
    image.style = "-moz-filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px)";
    image.style = "-webkit-filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px)";
    CssCode.innerHTML = "filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px);";
    CssCode.innerHTML += "\n" + "-o-filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px);";
    CssCode.innerHTML += "\n" + "-moz-filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px);";
    CssCode.innerHTML += "\n" + "-webkit-filter:grayscale(" + grayscale + ") sepia(" + Sepia + ") saturate(" + Saturate + ") hue-rotate(" + HueRotate + "deg) invert(" + Invert + ") opacity(" + Opacity + ") brightness(" + Brightness + ") contrast(" + Contrast + ") blur(" + Blur + "px);";
}
function imgReset() {
    var image = document.getElementById('demoImg');
    document.getElementById('Grayscale').value = "0";
    document.getElementById('Sepia').value = "0";
    document.getElementById('Saturate').value = "1";
    document.getElementById('HueRotate').value = "0";
    document.getElementById('Invert').value = "0";
    document.getElementById('Opacity').value = "1";
    document.getElementById('Brightness').value = "1";
    document.getElementById('Contrast').value = "1";
    document.getElementById('Blur').value = "0";
    var CssCode = document.getElementById('cssCode');
    image.style = "filter:none";
    image.style = "-webkit-filter:none";
    CssCode.innerHTML = "filter:none;\n-o-filter:none;\-moz-filter:none;\n-webkit-filter:none";
}