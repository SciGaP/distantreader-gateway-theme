Last login: Tue Jun 26 23:07:42 2018 from 45-16-202-192.lightspeed.iplsin.sbcglobal.net
[pga@pga-scigap-develop ~]$ ls
airavata-file-manager  cron  nohup.out  portals
[pga@pga-scigap-develop ~]$
[pga@pga-scigap-develop ~]$
[pga@pga-scigap-develop ~]$
[pga@pga-scigap-develop ~]$ cd portals/

▽
[pga@pga-scigap-develop portals]$ ls
dev-scigap  dev-seagrid  dev-testapplication  dev-testdrive  django-seagrid  gateway-user-data  group-based-auth-seagrid
[pga@pga-scigap-develop portals]$
[pga@pga-scigap-develop portals]$
[pga@pga-scigap-develop portals]$
[pga@pga-scigap-develop portals]$ cd dev-testdrive/
[pga@pga-scigap-develop dev-testdrive]$ ls
app  artisan  bootstrap  composer.bat  composer.json  composer.lock  phpunit.xml  public  README  server.php  vendor
[pga@pga-scigap-develop dev-testdrive]$
[pga@pga-scigap-develop dev-testdrive]$
[pga@pga-scigap-develop dev-testdrive]$
[pga@pga-scigap-develop dev-testdrive]$ cd public/
[pga@pga-scigap-develop public]$ ls
assets  css  favicon.ico  fonts  index.php  js  robots.txt  themes
[pga@pga-scigap-develop public]$
[pga@pga-scigap-develop public]$
[pga@pga-scigap-develop public]$
[pga@pga-scigap-develop public]$ cd themes/
[pga@pga-scigap-develop themes]$ ls
base  README  searchingsra-gateway-theme
[pga@pga-scigap-develop themes]$
[pga@pga-scigap-develop themes]$
[pga@pga-scigap-develop themes]$
[pga@pga-scigap-develop themes]$
[pga@pga-scigap-develop themes]$ cd searchingsra-gateway-theme/
[pga@pga-scigap-develop searchingsra-gateway-theme]$ git pull
remote: Counting objects: 18, done.
remote: Compressing objects: 100% (14/14), done.
remote: Total 18 (delta 9), reused 13 (delta 4), pack-reused 0
Unpacking objects: 100% (18/18), done.
From https://github.com/SciGaP/searchingsra-gateway-theme
   55dfa2f..7c61663  master     -> origin/master
Updating 55dfa2f..7c61663
error: Your local changes to the following files would be overwritten by merge:
	assets/css/custom-style.css
	partials/documentation.blade.php
Please, commit your changes or stash them before you can merge.
error: The following untracked working tree files would be overwritten by merge:
	assets/img/Dashboard.png
Please move or remove them before you can merge.
Aborting
[pga@pga-scigap-develop searchingsra-gateway-theme]$ ls
assets  layouts  LICENSE  partials  README.md  views
[pga@pga-scigap-develop searchingsra-gateway-theme]$ cd assets/
[pga@pga-scigap-develop assets]$ ls
css  img  js
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$ cd css/
[pga@pga-scigap-develop css]$ ls
custom-style.css  style.css
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$ vi custom-style.css
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$
[pga@pga-scigap-develop css]$ cd ..
[pga@pga-scigap-develop assets]$ ls
css  img  js
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$
[pga@pga-scigap-develop assets]$ cd ..
[pga@pga-scigap-develop searchingsra-gateway-theme]$ ls
assets  layouts  LICENSE  partials  README.md  views
[pga@pga-scigap-develop searchingsra-gateway-theme]$ pwd
/home/pga/portals/dev-testdrive/public/themes/searchingsra-gateway-theme
[pga@pga-scigap-develop searchingsra-gateway-theme]$
[pga@pga-scigap-develop searchingsra-gateway-theme]$
[pga@pga-scigap-develop searchingsra-gateway-theme]$
[pga@pga-scigap-develop searchingsra-gateway-theme]$
[pga@pga-scigap-develop searchingsra-gateway-theme]$ git pull
remote: Counting objects: 5, done.
remote: Compressing objects: 100% (3/3), done.
remote: Total 5 (delta 2), reused 5 (delta 2), pack-reused 0
Unpacking objects: 100% (5/5), done.
From https://github.com/SciGaP/searchingsra-gateway-theme
   7c61663..797492c  master     -> origin/master
Updating 55dfa2f..797492c
error: Your local changes to the following files would be overwritten by merge:
	assets/css/custom-style.css
	partials/documentation.blade.php
Please, commit your changes or stash them before you can merge.
error: The following untracked working tree files would be overwritten by merge:
	assets/img/Dashboard.png
Please move or remove them before you can merge.
Aborting

▽
<div class="container">
  <h2 class="text-center">Training and Documentation</h2>
    <hr class="separation-line blue-bg"/>

    <h4>Search SRA Gateway User Manual</h4>
      <h5>Gateway Access</h5>

        <ul style="list-style-type:square">
          <li>Create a gateway account in https://www.searchsra.org/. Use 'Create account'. Provide your details and you will receive an email for account verification.</li>
          <li>Click the link in the email received and confirm your email. Hint: The email sometimes tend to land on 'Junk email' or 'Trash'.</li>
          <li>When gateway administrator grants access, you would receive a notification email.</li>
          <li>Login to the gateway, You are ready to Search through the SRA!</li>
        </ul>
        <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/search-sra-login.png" alt="Gateway Login Page" style="width:500px;height:300px;" class="img-border">
    <hr/>
      <h5>Getting Started</h5>
          <ul style="list-style-type:square">
            <li>When logged in you would be in your home page, User Dashboard.</li>
            <li>Two placeholders, 'Browse Projects' and 'Browse Experiments'</li>
            <li>As a gateway user, you could browse your old projects or experiments using 'Browse Projects' or 'Browse Experiments'.</li>
            <li>To create new projects or experiments navigate through the menu bar on top.</li>
            <li>What is a Project? - Project is a collection of experiments, it groups experiments. When creating an experiment, you can select which project to create with.</li>
            <li>What is an Experiment? - Experiment is the gateway record you create in order to launch a job in a remote cluster/supercomputer/HPC.</li>
          </ul>
        <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dashboard.png" alt="Gateway Dashboard" style="width:500px;height:300px;" class="img-border">
    <hr/>
       <h5>Save & Launch an Experiment</h5>
        <ul style="list-style-type:square">
          <li>To create a new Experiment from the top menu, navigate to Experiment &rarr; Create</li>
          <li>Provide;</li>
            <ul style="list-style-type:square">
                <li>Experiment Name (Mandatory)</li>
                <li>Experiment Description (Optional)</li>
                <li>Project (LOV) - Latest will be the default choice.</li>
                <li>Application (LOV)</li>
            </ul>
          <li>Continue</li>
                    <li>Provide;</li>
              <ul style="list-style-type:square">
                  <li>Sharing Settings (Optional) - Share with fellow gateway users.</li>
                  <li>Application Inputs (Mandatory)</li>
              </ul>
          <li>Save & Launch</li>
          <br/>
          <li>When providing Application inputs; </li>
              <ul style="list-style-type:square">
                  <li>Fasta-Reference-File (Mandatory)</li>
                  <li>Select existing Search IDs File OR Upload your own below (Mandatory) - The default is to upload user's own file. Use can also select another option fro the available list. </li>
                  <li>Optional Input Files - This is where you upload your own Search IDs file.</li>
              </ul>
          <li>After providing the files you could 'Save' the experiment for later submission. If saved you could edit the experiment prior to launching.</li>
          <li>Once launched, you could cancel the experiment, which will cancel the job running in remote cluster. </li>
        </ul>
        <p></p>
    <hr/>
    <h5>Other Gateway Features</h5>
"documentation.blade.php" 83L, 5105C                                                                                                                                                                                        25,9          Top