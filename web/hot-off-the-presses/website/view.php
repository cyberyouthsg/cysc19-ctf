<html>
<title>Business Factory Inc | Press Release</title>
<body>
<h1>Business Factory Inc</h1>
<?php
// this is the worst way possible to code this but it ensures no unintended solutions
if (!isset($_GET['id'])) die("No ID specified.");
$pressID = (int) $_GET['id'];
switch ($pressID) {
	case 1:
		echo <<<'EOD'
		<h2>Business Factory Announces Plans For New Headquarters in Argleton, England</h2>
		<p><b>San Francisco, CA &mdash; 11 January 2019 &mdash;</b> Business Factory is pleased to announced that we have chosen Argleton, England as the location for our new headquarters.</p><p> With its rich history and diverse people, this is a great strategic move for us. Business Factory will invest $10 gazillion and create a lot of jobs (like, a LOT).</p><p> "I'm really excited for this move. It'll go off without any problems I'm sure" said Joe Bloggs, CEO of Business Factory.</p>
EOD;
		break;
	case 2:
		echo <<<'EOD'
		<h2>Statement on Planned Expansion to Argleton</h2>
		<p><b>San Francisco, CA &mdash; 30 January 2019 &mdash;</b>After lots of deliberation, Business Factory has decided to cancel its plans for a new headquarters in Argleton, England.</p><p>This decision has been made after media reports stated that Argleton was not a real place.</p><p>"Apparently one of my friends thought it'd be funny to try and convince me that Argleton was an actual place, and he described it as being so great I thought it would be a good idea to set up something there. I'm gonna have a nice long chat with him later" said Joe Bloggs, CEO of Business Factory.</p><p>At present, Business Factory is evaluating Finland as a possible location for a new HQ, but only after determining whether it actually exists.</p>
EOD;
		break;
	case 3:
		echo <<<'EOD'
		<h2>Statement on Reports of Asbestos Contamination</h2>
		<p><b>San Francisco, CA &mdash; 24 May 2019 &mdash;</b>Business Factory would like to catergorically state that any reports of an asbestos infestation in our California offices are false and we will sue the hell out of anyone who insinuates otherwise.</p><p>"It's not funny guys" said Joe Bloggs, CEO of Business Factory. <!-- Let's be real, it kind of is. - Press Release Writer--></p>
EOD;
		break;
	case 4:
		echo <<<'EOD'
		<h2>Business Factory Teams Up with Uber, Google, Venture Capital Firms to End Workplace Harassment</h2>
		<p><b>San Francisco, CA &mdash; 5 October 2019 &mdash;</b>Business Factory is teaming up with major tech firms Google and Uber as well as a selection of venture capital firms to push for anti-harassment policies across the industry.</p><p>"I don't think these guys have had any major controversies regarding that subject so they're pretty good role models I think" said Joe Bloggs, CEO of Business Factory.</p><p><b>Update (6 October):</b> Business Factory have suspended this initiative as new information has come to light.</p>
EOD;
		break;
	case 5:
		echo <<<'EOD'
		<h2>Business Factory Brings In New CEO</h2>
		<p><b>San Francisco, CA &mdash; 15 November 2019 &mdash;</b>Business Factory is announcing today that it is bringing on John Smith, previously CEO of Very Stealth Startup (before that imploded), to replace our previous CEO Joe Bloggs.</p><p>"There wasn't any serious character flaw in him or whatever, but to be honest the past year has shown that he is a bit of a dumbass. Anyway we are going to put all of that behind us now" said Joe Smith.</p><p>Hey, what are you doing here? Scram. Oh, fine, here's a flag for you: <b>CYS{i+s_Just_arithmetic}</b></p>
EOD;
		break;
	default:
		echo "Press release not found.";
}
?>
</body>
</html>
