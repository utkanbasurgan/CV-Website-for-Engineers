<?php
//
// Copyright © 2025 by Neparth
//
//--------------------------------------------------------------------------------------------------------------------------------

if (extractMatches('portfolio', '1') == "basic-neural-network-for-image-recognition")
{
	include WEBSITE_SERVER."/controllers_daemons/sites_controllers/101s_sites/desktops_websites/portfolios_desktops/bnnfirs_portfolios.php";
    $pageShown = true;
}

if (extractMatches('portfolio', '1') == "instagram-unfollowers")
{
	include WEBSITE_SERVER."/controllers_daemons/sites_controllers/101s_sites/desktops_websites/portfolios_desktops/ius_desktops.php";
    $pageShown = true;
}

if (extractMatches('portfolio', '1') == "basic-large-language-model")
{
	include WEBSITE_SERVER."/controllers_daemons/sites_controllers/101s_sites/desktops_websites/portfolios_desktops/bllms_portfolios.php";
    $pageShown = true;
}

if (extractMatches('portfolio', '1') == "account")
{
	include WEBSITE_SERVER."/controllers_daemons/sites_controllers/fragments_sites/dashboards_sites/accounts_dashboards.php";
    $pageShown = true;
}

//--------------------------------------------------------------------------------------------------------------------------------
?>

<?php if (!isset($pageShown)): ?>

<div style="background: #f7f7f7;">
    <div class="column-row page-padding" style="padding-bottom: 1.5rem">
        <div class="transparent-box" style="background: #FFF; font-weight: 400; margin: 0rem; color: rgba(29, 31, 34, 1); border: 0.1rem solid rgba(0, 0, 0, 0.1); box-shadow: 0.2rem 0.2rem 0.3rem rgba(0, 0, 0, 0.1);">
            
            <b style="font-size: 3rem; color: #205ABE"><i>Portfolio</i></b>
            </br>
			<div style="background: #205ABE; border-radius: 1rem; width: 100%; height: 0.5rem"></div>	

            <div class="seperator-main" style="height: 1.5rem"></div>

            <a id="whitemenu1" class="btn btn-straight3 btn-dashboard1" style="padding: 0.5rem 1rem; font-size: 1rem;margin: 0.25rem" onclick="toggleDisplays('portfolio-ai_and_machine_learning', ['portfolio-ai_and_machine_learning', 'portfolio-data_science', 'portfolio-web_softwares', 'portfolio-independent_projects']);">
                <b><i class='fas fa-chevron-right' style='margin-right: 0.25rem'></i> AI and Machine Learning (4)</b>
            </a>
            <a id="whitemenu2" class="btn btn-straight3 btn-dashboard1" style="padding: 0.5rem 1rem; font-size: 1rem; margin: 0.25rem" onclick="toggleDisplays('portfolio-data_science', ['portfolio-ai_and_machine_learning', 'portfolio-data_science', 'portfolio-web_softwares', 'portfolio-independent_projects'])">
                <b><i class="fas fa-chevron-right" style="margin-right: 0.25rem"></i> Data Science (2)</b>
            </a>
            <a id="whitemenu3" class="btn btn-straight3 btn-dashboard1" style="padding: 0.5rem 1rem; font-size: 1rem; margin: 0.25rem" onclick="toggleDisplays('portfolio-web_softwares', ['portfolio-ai_and_machine_learning', 'portfolio-data_science', 'portfolio-web_softwares', 'portfolio-independent_projects'])">
                <b><i class="fas fa-chevron-right" style="margin-right: 0.25rem"></i> Web Softwares (9)</b>
            </a>
            <a id="whitemenu4" class="btn btn-straight3 btn-dashboard1" style="padding: 0.5rem 1rem; font-size: 1rem; margin: 0.25rem" onclick="toggleDisplays('portfolio-independent_projects', ['portfolio-ai_and_machine_learning', 'portfolio-data_science', 'portfolio-web_softwares', 'portfolio-independent_projects'])">
                <b><i class="fas fa-chevron-right" style="margin-right: 0.25rem"></i> Independent Projects (1)</b>
            </a>

            <div class="seperator-main" style="height: 1.5rem"></div>

            <div class="grey-box" style="font-size: 1.2rem; border: 0rem; border-radius: 1rem">

                <div id="portfolio-ai_and_machine_learning">

                    <b style="font-size: 1.5rem">AI and Machine Learning</b>

                    <div class="seperator-main"></div>

                    <a class="btn btn-whitecontainer" href="/portfolio/basic-large-language-model">
                        <i class="fas fa-crop-alt" style="font-size:1.25rem; margin-right: 0.25rem;"></i> <b>Basic Large Language Model</b>
                    </a>

                    <div class="seperator-main"></div>

                    <a class="btn btn-whitecontainer" href="/portfolio/basic-neural-network-for-image-recognition">
                        <i class="fas fa-crop-alt" style="font-size:1.25rem; margin-right: 0.25rem;"></i> <b>Web-Based Neural Network for Image Recognition</b>
                    </a>

                    <div class="seperator-main"></div>

                    <a class="btn btn-whitecontainer" href="/portfolio/basic-neural-network-for-image-recognition">
                        <i class="fas fa-crop-alt" style="font-size:1.25rem; margin-right: 0.25rem;"></i> <b>Image Recognition on Python with OpenCV</b>
                    </a>

                    <div class="seperator-main"></div>

                    <a class="btn btn-whitecontainer" href="/portfolio/basic-neural-network-for-image-recognition">
                        <i class="fas fa-crop-alt" style="font-size:1.25rem; margin-right: 0.25rem;"></i> <b>Image Recognition on C with OpenCV</b>
                    </a>
                </div>

                <div id="portfolio-web_softwares" style="display: none">
                    <a class="btn btn-whitecontainer" href="/portfolio/basic-neural-network-for-image-recognition">
                        <i class="fas fa-crop-alt" style="font-size:1.25rem; margin-right: 0.25rem;"></i> <b>MySQL Tools for PHP</b>
                    </a>
                </div>

                <div id="portfolio-data_science" style="display: none">
                </div>

                <div id="portfolio-independent_projects" style="display: none">
                    <b>Independent Projects</b>

                    <div class="seperator-main"></div>

                    <a class="btn btn-whitecontainer" href="/portfolio/instagram-unfollowers">
                        <i class="fas fa-crop-alt" style="font-size:1.25rem; margin-right: 0.25rem;"></i> <b>Instagram Unfollowers</b>
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

<?php endif ?>