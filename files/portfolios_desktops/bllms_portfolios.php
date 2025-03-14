<?php
//
// Copyright © 2025 by Neparth
//
//--------------------------------------------------------------------------------------------------------------------------------
?>

<bod style="background: #f7f7f7">

	<div style="background: #f7f7f7; min-height: 100vh" id="wallpaper-type">

		<div class="column-row page-padding" style="padding-bottom: 1.5rem">
			<div class="transparent-box column-row" style="background: #FFF; font-weight: 400; margin: 0rem; color: rgba(29, 31, 34, 1); border: 0.1rem solid rgba(0, 0, 0, 0.1); box-shadow: 0.2rem 0.2rem 0.3rem rgba(0, 0, 0, 0.1);">
				<a href="/" id="btn-class-one">
					Home
				</a>
				<div style="width: 1rem"><center>></center></div>
				<a href="/education" id="btn-class-one">
					Portfolio
				</a>
				<div style="width: 1rem"><center>></center></div>
				<a href="/education" id="btn-class-one">
					Neural Network for Image Recognition
				</a>
			</div>
		</div>

		<div class="column-row page-padding" style="padding-bottom: 1.5rem">
			<div class="transparent-box column-row" style="background: #FFF; font-weight: 400; margin: 0rem; color: rgba(29, 31, 34, 1); border: 0.1rem solid rgba(0, 0, 0, 0.1); box-shadow: 0.2rem 0.2rem 0.3rem rgba(0, 0, 0, 0.1);">
				<div class="column-xs-12">
                <title>Drawboard</title>

                <center>
                    <b>Basic Neural Network</b>
                    <div class="seperator-main"></div>
                    <div class="board" id="board"></div>
                </center>

                <div class="seperator-main" style="height: 4rem"></div>

                <div class="column-row">
                    <button class="btn btn-blue-dynamic column-grid" onclick="resetCells();">Reset Board</button>
                    <button class="btn btn-blue-dynamic column-grid" id="canvas-button" onclick="showData();">Show Data</button>
                </div>

                <div class="seperator-main"></div>

                <div class="column-row">
                    <div class="column-xs-6">
                        <div id="training-status"></div>
                        <div class="seperator-main"></div>
                        <input type="text" id="train-symbol" placeholder="Enter symbol">
                        <div class="seperator-main"></div>
                        <button class="btn btn-blue-dynamic column-grid" onclick="trainData();">Train Model</button>
                    </div>
                    <div class="column-xs-6">
                        <input type="text" id="recognized-symbol" placeholder="" readonly>
                        <div class="seperator-main"></div>
                        <button class="btn btn-blue-dynamic column-grid" onclick="recognizeData();">Recognize</button>
                    </div>
                </div>

                <div class="seperator-main"></div>

                <div id="aiData" style="display: none">
                    <div id="debug-data"></div>
                    <div id="neural-data"></div>
                    <div id="parameter-data"></div>
                    <div id="canvas-data" style="word-break: break-all"></div>
                </div>



				</div>
			</div>
		</div>