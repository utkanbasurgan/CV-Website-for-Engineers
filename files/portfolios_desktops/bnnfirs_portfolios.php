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






<script>
function saveToCookie(name, data)
{
    document.cookie = `${name}=${JSON.stringify(data)}; path=/; max-age=31536000`;
}

function loadFromCookie(name)
{
    let cookies = document.cookie.split("; ");
    let cookie = cookies.find(row => row.startsWith(name + "="));
    return cookie ? JSON.parse(cookie.split("=")[1]) : null;
}

nn = loadFromCookie("neuralNetwork");

document.getElementById("parameter-data").innerHTML = JSON.stringify(nn.getCounts());
document.getElementById("neural-data").innerHTML = JSON.stringify(loadFromCookie("neuralNetwork"));
saveToCookie("deneme", 1111);
</script>







<script>
document.getElementById("debug-data").innerHTML = "1111111";

class NeuralNetwork
{
    constructor(input, hidden)
    {
		this.trainCounts = {};

        this.inputNodes = input;
        this.hiddenNodes = hidden;
    }

	setCounts(data)
    {
		this.trainCounts = data;
    }

	getCounts()
    {
		return this.trainCounts;
    }

    train(dataSymbol)
    {
		if (!this.trainCounts[dataSymbol]) this.trainCounts[dataSymbol] = 0;
    	this.trainCounts[dataSymbol]++;
	}
}

document.getElementById("debug-data").innerHTML = "222222";
</script>



<script>
function trainData()
{
	document.getElementById("training-status").innerHTML = "Training starts now...";

	let nn = new NeuralNetwork(1024, 64);;
	
	let dataCounts = loadFromCookie("nn.dataCounts");

	nn.setCounts(dataCounts);

    let dataSymbol = document.getElementById("train-symbol").value;
    let dataArray = getData();
    
	document.getElementById("training-status").innerHTML = "Training function...";
    nn.train(dataSymbol);

    saveToCookie("nn.dataCounts", nn.getCounts());

	document.getElementById("parameter-data").innerHTML = JSON.stringify(nn.getCounts());
	document.getElementById("training-status").innerHTML = "Training done.";
}
</script>

<script>
function recognizeData()
{
	document.getElementById("recognized-symbol").value = "Not Found";
}
</script>






















<script>
function getData()
{
	cellData = [];

	document.querySelectorAll(".cell").forEach(cell => {
		if (cell.style.backgroundColor == "black")
		{
			cellData.push("1");
		}
		else
		{
			cellData.push("0");
		}
	});

	return cellData;
}
</script>



<script>
	const board = document.getElementById("board");
	let isMouseDown = false;

	document.addEventListener("mousedown", () => isMouseDown = true);
	document.addEventListener("mouseup", () => isMouseDown = false);

	board.style.display = "grid";
	board.style.gridTemplateColumns = "repeat(32, 10px)";
	board.style.gap = "1px";
	board.style.width = "max-content";

	for (let i = 0; i < 32 * 32; i++) {
		let cell = document.createElement("div");
		cell.classList.add("cell");
		
		cell.addEventListener("mousedown", () => {
			cell.style.backgroundColor = "black";
			updateData();
		});
		
		cell.addEventListener("mouseover", () => {
			if (isMouseDown) {
				cell.style.backgroundColor = "black";
				updateData();
			}
		});
		
		board.appendChild(cell);
	}
	
	function resetCells()
	{
		document.querySelectorAll(".cell").forEach(cell => {
			cell.style.backgroundColor = "rgb(222, 222, 222)";
		});
		updateData();
	}

	function updateData()
	{
		cellData = [];
		document.querySelectorAll(".cell").forEach(cell => {
			if (cell.style.backgroundColor == "black")
			{
				cellData.push("1");
			}
			else
			{
				cellData.push("0");
			}
		});
		document.getElementById("canvas-data").innerHTML = cellData;
	}

	updateData();
</script>



<script>
function showData()
{
    const div = document.getElementById("aiData");
	const button = document.getElementById("canvas-button");

    if (div.style.display === "none" || div.style.display === "")
	{
        div.style.display = "block";
		button.innerHTML = "Hide Data";
    }
	else
	{
        div.style.display = "none";
		button.innerHTML = "Show Data";
    }
}
</script>

<style>
	.board {
		display: grid;
		grid-template-columns: repeat(32, 10px);
		grid-template-rows: repeat(32, 10px);
		gap: 1px;
	}
	.cell {
		width: 10px;
		height: 10px;
		background-color: rgb(222, 222, 222);
	}
</style>









				</div>
			</div>
		</div>