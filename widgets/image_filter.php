<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/8/2017
 * Time: 1:26 AM
 */

?>

<div class="container-fluid zero-pad div-content">
    <div class="col-sm-7 zero-pad">
        <img id="demoImg" class="img-responsive img" src="http://landing.hidoctor.ir/pages/monaliza/assets/img/1.jpg"
             alt="Image not found..."/>
        <a class="btn btn-square-to-round btn-bordered-warning resetBtn"><span class="glyphicon glyphicon-repeat"
                                                                               onclick="imgReset()"></span></a>
    </div>
    <div class="col-sm-5">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-xs-6">Grayscale</label>
                <div class="col-xs-6">
                    <input id="Grayscale" class="form-control input-sm" placeholder="Grayscale" type="number" min="0"
                           max="1" step="0.05" value="0" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Sepia</label>
                <div class="col-xs-6">
                    <input id="Sepia" class="form-control input-sm" placeholder="Sepia" type="number" min="0" max="1"
                           step="0.05" value="0" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Saturate</label>
                <div class="col-xs-6">
                    <input id="Saturate" class="form-control input-sm" placeholder="Saturate" type="number" min="0"
                           max="1" step="0.05" value="1" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Hue-Rotate</label>
                <div class="col-xs-6">
                    <input id="HueRotate" class="form-control input-sm" placeholder="Hue-Rotate" type="number" min="0"
                           max="360" step="5" value="0" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Invert</label>
                <div class="col-xs-6">
                    <input id="Invert" class="form-control input-sm" placeholder="Invert" type="number" min="0" max="1"
                           step="0.05" value="0" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Opacity</label>
                <div class="col-xs-6">
                    <input id="Opacity" class="form-control input-sm" placeholder="Opacity" type="number" min="0"
                           max="1" step="0.05" value="1" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Brightness</label>
                <div class="col-xs-6">
                    <input id="Brightness" class="form-control input-sm" placeholder="Brightness" type="number" min="0"
                           max="1" step="0.05" value="1" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Contrast</label>
                <div class="col-xs-6">
                    <input id="Contrast" class="form-control input-sm" placeholder="Contrast" type="number" min="0"
                           max="2" step="0.05" value="1" onchange="imgFilter()"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-6">Blur</label>
                <div class="col-xs-6">
                    <input id="Blur" class="form-control input-sm" placeholder="Blur" type="number" min="0" max="10"
                           step="1" value="0" onchange="imgFilter()"/>
                </div>
            </div>
            <kbd class="kbd">Actual CSS</kbd>
            <textarea id="cssCode" class="form-control cssCode" style="background-color:#FFFFFF" wrap="off" rows="4"
                      readonly="true"></textarea>
        </form>
    </div>
</div>
