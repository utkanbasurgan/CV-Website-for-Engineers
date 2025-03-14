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

                    <div class="seperator-main"></div>

                    <div class="column-row">
                        <div class="column-xs-6">
                            <input type="file">
                        </div>
                        <div class="column-xs-6">
                            <input type="file">
                            <div class="seperator-main"></div>
                            <button class="btn btn-blue-dynamic column-grid" onclick="scanData();">Find Unfollowers</button>
                        </div>
                    </div>

                    <div class="seperator-main"></div>

                    <div id="theData"></div>
				</div>
			</div>
		</div>


<script>
function scanData() {
    // Get file input elements
    const fileInputs = document.querySelectorAll('input[type="file"]');
    const file1 = fileInputs[0].files[0];
    const file2 = fileInputs[1].files[0];
    
    if (!file1 || !file2) {
        document.getElementById('theData').innerHTML = '<p>Please select both files</p>';
        return;
    }
    
    // Create file readers
    const reader1 = new FileReader();
    const reader2 = new FileReader();
    
    // Process files when both are loaded
    let names1 = [], names2 = [];
    let filesLoaded = 0;
    
    reader1.onload = function(e) {
        const content = e.target.result;
        names1 = extractInstagramNames(content);
        filesLoaded++;
        if (filesLoaded === 2) {
            findUnfollowers(names1, names2);
        }
    };
    
    reader2.onload = function(e) {
        const content = e.target.result;
        names2 = extractInstagramNames(content);
        filesLoaded++;
        if (filesLoaded === 2) {
            findUnfollowers(names1, names2);
        }
    };
    
    // Extract Instagram usernames from HTML content
    function extractInstagramNames(htmlContent) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(htmlContent, 'text/html');
        const links = doc.querySelectorAll('a[href*="instagram.com"]');
        
        const names = [];
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href.includes('instagram.com/')) {
                // Extract the username from the URL
                const urlParts = href.split('instagram.com/');
                if (urlParts.length > 1) {
                    let name = urlParts[1];
                    // Remove any trailing slash or query parameters
                    name = name.split('/')[0].split('?')[0];
                    if (name) {
                        names.push(name);
                    }
                }
            }
        });
        
        return names;
    }
    
    // Find names that appear in file1 but not in file2
    function findUnfollowers(names1, names2) {
        const unfollowers = names1.filter(name => !names2.includes(name));
        displayResults(names1, names2, unfollowers);
    }
    
    // Display the results on the page
    function displayResults(names1, names2, unfollowers) {
        const resultDiv = document.getElementById('theData');
        
        let html = '<div class="results">';
        html += `<h3>Results</h3>`;
        html += `<p>File 1: Found ${names1.length} Instagram accounts</p>`;
        html += `<p>File 2: Found ${names2.length} Instagram accounts</p>`;
        html += `<p>Unfollowers: ${unfollowers.length} accounts</p>`;
        
        if (unfollowers.length > 0) {
            html += '<h4>Accounts that appear in File 1 but not in File 2:</h4>';
            html += '<ul style="max-height: 300px; overflow-y: auto;">';
            unfollowers.forEach(name => {
                html += `<li><a href="https://www.instagram.com/${name}" target="_blank">${name}</a></li>`;
            });
            html += '</ul>';
        } else {
            html += '<p>No unfollowers found!</p>';
        }
        
        html += '</div>';
        resultDiv.innerHTML = html;
    }
    
    // Read the files as text
    reader1.readAsText(file1);
    reader2.readAsText(file2);
}
</script>