<div>
	<div>
		<div>
			<!--post start-->
			<div>

				<div class="">
					<img src="<?php echo $value["avatar"] ?>" />
				</div>
				<div class="">

					<div>
						<a href="#" rel="category tag">
							<?php
                            			$key = $this->Model->fetchOne("select * from menu_catalog where id=?",[$value["catalog"]]);
                            			if(isset($key["name"]))
                            				echo $key["name"];
                            		?>
						</a>
					</div>
					<div class="entry-title" style="font-weight: 600px; font-size: 24px;">
						<?php echo $value["name"] ?>
					</div>

					<!--/.entry-header -->
					<div>
						<span style="font-style: italic"><?php echo $value["description"] ?></span>
						<p style="margin-top: 20px;">
							<b>Nội dung chính: </b> <br>
							<?php echo $value["content"] ?>
						</p>
					</div>
					<!-- .entry-content -->
					<div>
						<div>
							<?php echo $value["dateTime"] ?>
						</div>
					</div>
					<!-- .entry-meta -->
				</div>

			</div>
			<!--/post end-->
		</div>
	</div>
	<!-- /col -->

	<!--sidebar start-->

	<!--sidebar end-->
</div>
<h2 tyle>Check List</h2>

<table>
	<thead>
		<tr>
			<th>Test ID</th>
			<th>Test Name</th>
			<th>Status</th>
			<th>Notes</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>WSTG-INFO</strong></td>
			<td><strong>Information Gathering</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-01</td>
			<td>Conduct Search Engine Discovery and Reconnaissance for Information Leakage</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-02</td>
			<td>Fingerprint Web Server</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-03</td>
			<td>Review Webserver Metafiles for Information Leakage</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-04</td>
			<td>Enumerate Applications on Webserver</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-05</td>
			<td>Review Webpage Content for Information Leakage</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-06</td>
			<td>Identify Application Entry Points</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-07</td>
			<td>Map Execution Paths Through Application</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-08</td>
			<td>Fingerprint Web Application Framework</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-09</td>
			<td>Fingerprint Web Application</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INFO-10</td>
			<td>Map Application Architecture</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><strong>WSTG-CONF</strong></td>
			<td><strong>Configuration and Deploy Management Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-01</td>
			<td>Test Network Infrastructure Configuration</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-02</td>
			<td>Test Application Platform Configuration</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-03</td>
			<td>Test File Extensions Handling for Sensitive Information</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-04</td>
			<td>Review Old Backup and Unreferenced Files for Sensitive Information</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-05</td>
			<td>Enumerate Infrastructure and Application Admin Interfaces</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-06</td>
			<td>Test HTTP Methods</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-07</td>
			<td>Test HTTP Strict Transport Security</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-08</td>
			<td>Test RIA Cross Domain Policy</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-09</td>
			<td>Test File Permission</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-10</td>
			<td>Test for Subdomain Takeover</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CONF-11</td>
			<td>Test Cloud Storage</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><strong>WSTG-IDNT</strong></td>
			<td><strong>Identity Management Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-IDNT-01</td>
			<td>Test Role Definitions</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-IDNT-02</td>
			<td>Test User Registration Process</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-IDNT-03</td>
			<td>Test Account Provisioning Process</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-IDNT-04</td>
			<td>Testing for Account Enumeration and Guessable User Account</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-IDNT-05</td>
			<td>Testing for Weak or Unenforced Username Policy</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><strong>WSTG-ATHN</strong></td>
			<td><strong>Authentication Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-01</td>
			<td>Testing for Credentials Transported over an Encrypted Channel</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-02</td>
			<td>Testing for Default Credentials</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-03</td>
			<td>Testing for Weak Lock Out Mechanism</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-04</td>
			<td>Testing for Bypassing Authentication Schema</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-05</td>
			<td>Testing for Vulnerable Remember Password</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-06</td>
			<td>Testing for Browser Cache Weakness</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-07</td>
			<td>Testing for Weak Password Policy</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-08</td>
			<td>Testing for Weak Security Question Answer</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-09</td>
			<td>Testing for Weak Password Change or Reset Functionalities</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHN-10</td>
			<td>Testing for Weaker Authentication in Alternative Channel</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><strong>WSTG-ATHZ</strong></td>
			<td><strong>Authorization Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHZ-01</td>
			<td>Testing Directory Traversal File Include</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHZ-02</td>
			<td>Testing for Bypassing Authorization Schema</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHZ-03</td>
			<td>Testing for Privilege Escalation</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ATHZ-04</td>
			<td>Testing for Insecure Direct Object References</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><strong>WSTG-SESS</strong></td>
			<td><strong>Session Management Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-01</td>
			<td>Testing for Session Management Schema</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-02</td>
			<td>Testing for Cookies Attributes</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-03</td>
			<td>Testing for Session Fixation</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-04</td>
			<td>Testing for Exposed Session Variables</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-05</td>
			<td>Testing for Cross Site Request Forgery</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-06</td>
			<td>Testing for Logout Functionality</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-07</td>
			<td>Testing Session Timeout</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-08</td>
			<td>Testing for Session Puzzling</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-SESS-09</td>
			<td>Testing for Session Hijacking</td>
			<td></td>
			<td></td>
		</tr>
		<tr >
			<td><strong>WSTG-INPV</strong></td>
			<td><strong>Input Validation Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-01</td>
			<td>Testing for Reflected Cross Site Scripting</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-02</td>
			<td>Testing for Stored Cross Site Scripting</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-03</td>
			<td>Testing for HTTP Verb Tampering</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-04</td>
			<td>Testing for HTTP Parameter pollution</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-05</td>
			<td>Testing for SQL Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-06</td>
			<td>Testing for LDAP Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-07</td>
			<td>Testing for XML Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-08</td>
			<td>Testing for SSI Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-09</td>
			<td>Testing for XPath Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-10</td>
			<td>Testing for IMAP SMTP Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-11</td>
			<td>Testing for Code Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-12</td>
			<td>Testing for Command Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-13</td>
			<td>Testing for Format String Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-14</td>
			<td>Testing for Incubated Vulnerabilities</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-15</td>
			<td>Testing for HTTP Splitting Smuggling</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-16</td>
			<td>Testing for HTTP Incoming Requests</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-17</td>
			<td>Testing for Host Header Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-18</td>
			<td>Testing for Server-side Template Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-INPV-19</td>
			<td>Testing for Server-Side Request Forgery</td>
			<td></td>
			<td></td>
		</tr>
		<tr >
			<td><strong>WSTG-ERRH</strong></td>
			<td><strong>Error Handling</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ERRH-01</td>
			<td>Testing for Improper Error Handling</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-ERRH-02</td>
			<td>Testing for Stack Traces</td>
			<td></td>
			<td></td>
		</tr>
		<tr >
			<td><strong>WSTG-CRYP</strong></td>
			<td><strong>Cryptography</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CRYP-01</td>
			<td>Testing for Weak Transport Layer Security</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CRYP-02</td>
			<td>Testing for Padding Oracle</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CRYP-03</td>
			<td>Testing for Sensitive Information Sent Via Unencrypted Channels</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CRYP-04</td>
			<td>Testing for Weak Encryption</td>
			<td></td>
			<td></td>
		</tr>
		<tr >
			<td><strong>WSTG-BUSLOGIC</strong></td>
			<td><strong>Business Logic Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-01</td>
			<td>Test Business Logic Data Validation</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-02</td>
			<td>Test Ability to Forge Requests</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-03</td>
			<td>Test Integrity Checks</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-04</td>
			<td>Test for Process Timing</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-05</td>
			<td>Test Number of Times a Function Can be Used Limits</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-06</td>
			<td>Testing for the Circumvention of Work Flows</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-07</td>
			<td>Test Defenses Against Application Misuse</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-08</td>
			<td>Test Upload of Unexpected File Types</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-BUSL-09</td>
			<td>Test Upload of Malicious Files</td>
			<td></td>
			<td></td>
		</tr>
		<tr >
			<td><strong>WSTG-CLIENT</strong></td>
			<td><strong>Client-side Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-01</td>
			<td>Testing for DOM based Cross Site Scripting</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-02</td>
			<td>Testing for JavaScript Execution</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-03</td>
			<td>Testing for HTML Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-04</td>
			<td>Testing for Client-side URL Redirect</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-05</td>
			<td>Testing for CSS Injection</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-06</td>
			<td>Testing for Client-side Resource Manipulation</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-07</td>
			<td>Test Cross Origin Resource Sharing</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-08</td>
			<td>Testing for Cross Site Flashing</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-09</td>
			<td>Testing for Clickjacking</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-10</td>
			<td>Testing WebSockets</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-11</td>
			<td>Test Web Messaging</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-12</td>
			<td>Test Browser Storage</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-CLNT-13</td>
			<td>Testing for Cross Site Script Inclusion</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><strong>WSTG-APIT</strong></td>
			<td><strong>API Testing</strong></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="checklist">
			<td>WSTG-APIT-01</td>
			<td>Testing GraphQL</td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>



<h2>Result</h2>

<div class="collapsible" id="nmap">
	<!--div><input type="checkbox"></div-->
	<div class="collapsible-child">Nmap</div>
	<div style="float: right;margin: 0 1em;"><i class="fas fa-atom fa-spin fa-lg"></i></div>
	<div class="scanner-status"><i class="fas fa-atom fa-spin fa-lg"></i></div>
</div>
<div class="content-collapsible">
	<pre># Nmap 7.91 scan initiated Fri May 07 16:19:01 2021 as: nmap -A -v -p80 -oN test.xml 192.168.12.1
Nmap scan report for 192.168.12.1
Host is up (0.00074s latency).

PORT   STATE  SERVICE VERSION
80/tcp closed http
MAC Address: 00:72:78:1A:2A:67 (Cisco Systems)
Too many fingerprints match this host to give specific OS details
Network Distance: 1 hop

TRACEROUTE
HOP RTT     ADDRESS
1   0.74 ms 192.168.12.1

Read data files from: C:\Program Files (x86)\Nmap
OS and Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
# Nmap done at Fri May 07 16:19:22 2021 -- 1 IP address (1 host up) scanned in 23.65 seconds
</pre>
</div>


<div  class="collapsible" id="Acunetix">
	<!--div><input type="checkbox"></div-->
	<div class="collapsible-child">Acunetix</div>
	<div style="float: right;margin: 0 1em;"><i class="fas fa-atom fa-spin fa-lg"></i></div>
	<div class="scanner-status"><i class="fas fa-atom fa-spin fa-lg"></i></div>
</div>
<div class="content-collapsible">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
		magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
</div>

<div class="collapsible" id="subdomain">
	<!--div><input type="checkbox"></div-->
	<div class="collapsible-child">Subdomain Finder</div>
	<div style="float: right;margin: 0 1em;"><i class="fas fa-atom fa-spin fa-lg"></i></div>
	<div class="scanner-status"><i class="fas fa-atom fa-spin fa-lg"></i></div>
</div>
<div class="content-collapsible">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
		magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
</div>






<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;
	for (i = 0; i < coll.length; i++) {
		coll[i].firstElementChild.addEventListener("click", function () {
			this.classList.toggle("active-collapsible");
			var content = this.parentElement.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}

	var sca = document.getElementsByClassName("scanner-status");
	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function () {
			// cái nè dùng để in ra result của scanner
			/*
			this.classList.toggle("active-collapsible");
			var content = this.parentElement.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}*/

		});
	}
	
</script>
<script>
function updateChecklist(a){

	var markers = { "Checklist": a.parentElement.children[0].textContent, "id": "<?php echo $value['token']?>"};
	$.ajax({
		type: "POST",
		url: "api/checkList.php",
		// The key needs to match your method's input parameter (case-sensitive).
		data: JSON.stringify(markers),
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function(data){
			//console.log(a.innerHTML);
			if(a.innerHTML==""){
				a.innerHTML="<i class='fas fa-check-circle'></i>";
			}else{
				a.innerHTML="";
			}
		},
		error: function(errMsg) {
			alert("Fail");
		}
	});
	
	console.log(a.parentElement.children[0].textContent);
}
var cl=document.getElementsByClassName("checklist");
$(document).ready(function(){
    $.ajax({url: "api/checkList.php?id=<?php echo $value['token']?>", success: function(result){
		var status=result;
		
		for(i=0;i<cl.length;i++){
			if(status[cl[i].children[0].textContent]==1){
				cl[i].children[2].innerHTML="<i class='fas fa-check-circle'></i>";
			}
			//cl[i].children[2].addEventListener("click", updateChecklist(cl[i].children[0].textContent) );
		}
    }});
});
for(i=0;i<cl.length;i++){
	cl[i].children[2].addEventListener("click", function(){
		updateChecklist(this);
	});
}
</script>