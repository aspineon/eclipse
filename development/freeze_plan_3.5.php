<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-04-03
	#
	# Description: Eclipse project Galileo release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Draft Eclipse 3.5 endgame plan";
	$pageKeywords	= "eclipse, 3.5, milestone, schedule, endgame, galileo";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">




<head>
<title>Eclipse 3.5 Endgame Plan</title>
</head>
<body>
<div class="homeitem3col">
<h3>Eclipse 3.5 Draft endgame plan</h3>
<table cellspacing="5" cellpadding="2" width="100%" border="0">
<tbody> <tr> <td valign="top" align="left" colspan="2"><b>Status</b></td></tr>
<tr> <td valign="top" align="right"></td><td> 
<p><b>April 2, 2009 - M7 development underway.</td></tr>
    <tr>
      <td valign="top" align="left" colspan="2"><b>Detailed Timeline</b></td>
    </tr>
    <tr>
      <td valign="top" align="left" colspan="2">
        <table border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td align="right" height="20"><b>May 2009</b>&nbsp;</td>
            <td height="20" bgcolor="#cccccc"><img src="images/tbar_l.gif" width="24" height="20"></td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">4</td>
            <td align="right" height="20"> Mon 8:00 am EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Transition to fix and polish mode</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#Transition"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>         
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">14</td>
            <td align="right" height="20"> Thu 20:00 pm EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Release Candidate 1 build</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
           <tr>
            <td height="30"></td>
            <td align="center" height="30"><img src="images/gray.gif" width="2" height="30"></td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">18</td>
            <td align="right" height="20"> Mon 8:00 am EDT</td>
            <td height="20">&nbsp;<b>Start 2-day test pass against RC1</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassBeforeRC2"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>           
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">20</td>
            <td align="right" height="20"> Wed 8:00 am EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Start fix pass</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC2"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td height="30"></td>
            <td align="center" height="30"><img src="images/gray.gif" width="2" height="30"></td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">21</td>
            <td align="right" height="20"> Thu 20:00 pm EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Release Candidate 2 build</b></td>
            <td height="20">&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#RC2"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">goals</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td height="30"></td>
            <td align="center" height="30"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">25</td>
            <td align="right" height="20">Mon 8:00 am EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Start 2-day test pass against RC2</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassUsingRC2"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>          
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">27</td>
            <td align="right" height="20">Wed 8:00 am EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Start fix pass</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC2"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td height="30"></td>
            <td align="center" height="30"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">28</td>
            <td align="right" height="20"> Thu 20:00 pm EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Release Candidate 3 build</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#RC3"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">goals</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td align="right" height="20"><b>June 2009</b>&nbsp;</td>
            <td height="20"><img src="images/tbar_l.gif" width="24" height="20"></td>
          </tr>                 
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">1</td>
            <td align="right" height="20">&nbsp;&nbsp;&nbsp;Mon 8:00 am EDT</td>
            <td height="20">&nbsp;&nbsp;<b>All-day test pass against RC3</b></td>
            <td height="20">&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassUsingRC3"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">2</td>
            <td align="right" height="20">Tue 8:00 am EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Start fix pass</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC3"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
          <tr>
            <td height="20"></td>
            <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">4</td>
            <td align="right" height="20"> Thu 20:00 pm EDT</td>
            <td height="20">&nbsp;&nbsp;<b>Release Candidate 4 build</b></td>
            <td height="20">&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#RC4"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">goals</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
		  <tr>
           <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
		   <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
		   <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
			<td align="right" height="20"></td>
            <td align="right" height="20"></td>
            <td height="20">&nbsp;&nbsp;<b>Post RC4 builds will be run to meet translation,</b></td>
            <td height="20">&nbsp;</td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
		  		   <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
			<td align="right" height="20"></td>
            <td align="right" height="20"></td>
            <td height="20">&nbsp;&nbsp;<b>documentation and Galileo goals.</b></td>
            <td height="20">&nbsp;</td>          
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
		   <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
		  
          <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
		   <tr>
            <td align="right" height="20"><b>June 2007</b>&nbsp;</td>
            <td height="20"><img src="images/tbar_l.gif" width="24" height="20"></td>
          </tr>
  		  <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
		  <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>

		  <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>
		  <tr>
            <td height="20"></td>
            <td align="center" height="20"><img src="images/gray.gif" width="2" height="20"></td>
          </tr>

          <tr>
            <td height="20"></td>            
    	    <td height="20"><img src="images/tbar_r.gif" width="24" height="20"></td>
            <td align="right" height="20">24</td>
            <td align="right" height="20"></td>
            <td height="20">&nbsp;&nbsp;<b>Release 3.5 available</b></td>
            <td height="20">&nbsp;&nbsp;</td>
            <td height="20">&nbsp;&nbsp;<b><a href="#Release3.5"><img src="images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
            <td height="20">&nbsp;&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td valign="top" align="left" colspan="2"><b><Useful
        Links</b></td>
    </tr>
        <tr>
      <td valign="top" align="right"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td>
        <p><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html ">Build
        Schedule</a> - details on build times.</p>
      </td>
    </tr>   
    <tr>
      <td valign="top" align="right"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td>
        <p><a href="http://wiki.eclipse.org/index.php/3.3_Release_checklist">Eclipse Release Checklist</a> -
        lists various things that need to be checked before each release.</p>
      </td>
    </tr>
    <tr>
      <td valign="top" align="right"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td>
        <p><a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse">Eclipse
        Project Galileo Plan</a></p>
      </td>
    </tr>
   
    <tr>
      <td valign="top" align="right"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td>
        <p><a href="http://wiki.eclipse.org/index.php/Galileo">Galileo Simultaneous Release</a></p>
      </td>
    </tr>
    <tr>
      <td valign="top" align="left" colspan="2"><b>What is the game plan?</b></td>
    </tr>
    <tr>
      <td valign="top" align="right" width="2%"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td width="98%">
        <p>The Eclipse 3.5 release endgame involves a sequence of test/fix
        passes leading to the official 3.5 release. Even more than at other
        times, we welcome all the help we can get with testing and fixing the
        various Eclipse release candidates. To participate effectively everyone
        needs to track this schedule closely so that we end up testing the
        latest release candidate and entering <a href="http://bugs.eclipse.org/bugs/">bugzilla
        bug reports</a> in time to be considered for the fix pass that
        immediately follows, giving rise to the next release candidate.
        Throughout the process, we are most concerned with &quot;stop ship&quot;
        (P1) bugs that must be fixed before we can declare that we have a
        release. If we discover a &quot;stop ship&quot; bug late in the process,
        we may have to slip the schedule to allow it to be fixed and retested.
        This is why it is so important to ferret out &quot;stop ship&quot; bugs
        as early as possible, while there is still time left in the schedule to
        address them. Most of the bugs that will be uncovered will be less
        serious. During the fix passes, we prioritize the less serious bugs and
        try to fix as many of the important ones as possible without
        jeopardizing the schedule or the overall stability of the release. We're
        always on the look out for &quot;regression&quot; type bugs where we
        somehow manage to break something that had been working fine before.
        Regressions are an important warning sign that our optimism and
        enthusiasm is outpacing our understanding and abilities. Calling special
        attention to regressions helps us to collectively bring our head back in
        line with our feet, so to speak. With each cycle, we gradually raise the
        bar on the kinds and numbers of changes that we will consider making,
        until we reach a point where we would only fix &quot;stop ship&quot;
        bugs and regressions. (The lesser bugs that we don't end up fixing will
        be reconsidered for the next release.) Because of this progressive
        tightening, the windows of opportunity for fixing problems within the
        schedule are relatively narrow. Things works best if everyone pushes in
        the right direction on the right things at the right times. As it is
        virtually impossible to work out all the details in advance, we will be
        updating this page regularly to reflect current status and current
        testing emphasis. If you are participating we suggest you bookmark this
        page in your browser and check back frequently for updates. General
        announcements during the endgame are posted to the <a href="mailto:platform-releng-dev@eclipse.org">platform-releng-dev@eclipse.org</a>
        developer mailing list. Anyone participating in the endgame should be
        subscribed to this list, and should direct any general questions and
        comments about the process there as well.</p>
      </td>
    </tr>
  </tbody>
</table>
<table cellspacing="5" cellpadding="2" width="100%" border="0">
  <tbody>
    <tr>
      <td valign="top" align="right" width="2%"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td width="98%"> <p><b><a name="ReleaseCandidate"></a>Release Candidate</b> 
          - Release candidate builds are like milestone builds. The main difference 
          is that release candidate builds are usually immediately followed by 
          a rigorous test pass. We test each release 
          candidate to find serious bugs and to increase our confidence in what 
          we have. We then fix the serious bugs in each release candidate to get 
          the next release candidate, which ought to be even better. Each release 
          candidate build is kicked off at the indicated time, with the goal being 
          to have a release candidate available within 24 hours. As the build 
          is ready, all of the teams validate it and declare it either &quot;go&quot; 
          of &quot;no go&quot; for testing. Getting a build that is testable may 
          require a few attempts. These happen in rapid succession, and we continue 
          rebuilding and revalidating until we have our next release candidate. 
          It is critical that we have enough time to do test passes. We will slide 
          the schedule and use weekends as necessary if there are delays of more 
          than 24 hours in getting a viable release candidate. Note that we will 
          also do warm-up builds in the days leading up to each release candidate 
          build to do early integration of fixes.</p>
        </td>
    </tr>
    <tr>
      <td valign="top" align="right" width="2%"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td width="98%">
        <p><b><a name="TestPass"></a>Test Pass</b> - Once we have a release
        candidate build in hand, we enter an intensive test pass for a limited
        period of time. Each component team is responsible for preparing a
        comprehensive test plan for their component. These component test plans
        cover all the functionality that requires manual testing, and identifies
        the operating environments in which the testing needs to be done. Each
        component team is responsible for staffing and carrying out their test
        plan each cycle. Each component team is expected to have most of the
        team testing throughout each test pass (a small subset of the team may
        be focused on concurrently preparing candidate fixes for &quot;stop
        ship&quot; bugs or other high priority tasks). Everyone in the Eclipse
        community is encouraged to participate in test passes and report bugs to
        <a href="https://bugs.eclipse.org/bugs/">bugzilla</a>. Ideally, the bug
        report should explicitly call attention to regressions and potential
        &quot;stop ship&quot; problems.</p>
      </td>
    </tr>
    <tr>
      <td valign="top" align="right" width="2%" height="63"><img src="images/Adarrow.gif" border="0" width="16" height="16"></td>
      <td width="98%" height="63">
        <p><b><a name="FixPass"></a>Fix Pass</b> - After each test pass, we analyze 
          and prioritize the set of outstanding bugs and enter an intensive fix 
          pass for a limited period of time where we try to fix the most pressing 
          problems. The bugs that we intend to fix for the next release candidate 
          are tagged accordingly (e.g., a bug tagged as Target 3.5 RC1 should 
          be fixed as of the release candidate 1 build). &quot;stop ship&quot; 
          bugs and regressions are always given first priority; less severe problems 
          are addressed by decreasing priority and as many as possible are fixed 
          in the time available. With each successive release candidate, we also 
          tighten the rules for the kinds of changes will be allowed to the code 
          base and increase the number of people that check the changes before 
          they are released. The rules apply to any and all changes to the code. 
          Any committer for any Eclipse component can perform the checking duties. 
          All committers for a component have the right to veto a change (with 
          an explanation) even after it has been released into the code base. 
          If such a veto occurs, the change automatically comes out until the 
          vetoing committer's concerns are addressed. The committer who releases 
          a given change, the person that checks the change, and the component 
          leads that approved making the change in the first place, are jointly 
          responsible for seeing it through. In other words, we expect a strong 
          commitment to <em>personally</em> help fix any problems caused by changes 
          made in fix passes.</p>
      </td>
    </tr>
  </tbody>
</table>
<table cellspacing="5" cellpadding="2" width="100%" border="0">
  <tbody>
    <tr>
      <td valign="top" align="left" colspan="2"><b>Details</b></td></tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="Transition"></a>Transition 
        to fix and polish</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Notes:</td>
            <td width="75%"> <ul>
                <li>All components transition on April 3 to polishing and fixing 
                  bugs for remainder of release cycle.</li>
                <li>PMC approval is required for feature work including API changes 
                  being done after M5. See the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list.</li>
                  No changes are to be released without prior approval and associated bug report.
                  If a change is made to API to make it binary compatible with 3.3, technically this is still an API change, and thus it should be treated in the same way as any other API change requests.                  
              </ul>              
			  </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="RC0"></a>RC0/M7</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Goals:</td>
            <td width="75%"> <ul>
                <li>RC0 and milestone M7 are one and the same 
                <li>All components feature complete. 
                <li>Accurate prioritization of all outstanding defects.</li>
                <li>String externalization complete (including mnemonics).
                <li>3.5 test plans posted.</li>
              </ul>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="RC1"></a>RC1</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Goals:</td>
            <td width="75%"> <ul>
                <li>Accurate prioritization of all outstanding defects.</li>
                <li>All work on polish items complete.</li>
                <li>Final API.</li>
                <li>No outstanding P1 defects. </li>
                <li>As few P2 defects as possible.</li>
              </ul>
              <p>&nbsp;</p>
               Note that May 8 is a holiday in France. May 12th is a holiday in Switzerland and possibly France.
                </td>
          
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="TestPassBeforeRC2"></a>Test
        pass prior to RC2</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Notes:</td>
            <td width="75%">Full day test pass involving entire community, using 
            the most recent nightly build to help stabilize HEAD for the upcoming RC2 build.
            Committers with high priority fixes to make for RC2 can opt out of testing
            to focus on getting in fixes.  However, all committers should be working
            with the test candidate build.
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="RC2"></a>RC2</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Goals:</td>
            <td width="75%">
              <ul>
                <li>Final artwork in place.
                <li>Accurate prioritization of all outstanding defects.
                <li>No outstanding P1 defects.
                <li>As few P2 defects as possible.</li>
              </ul>  
			  Monday May 19 is a holiday in Canada. 
			  Monday May 26 is a holiday in the US.              
              </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="TestPassUsingRC2"></a>Test pass using RC2</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Notes:</td>
            <td width="75%">Concerted 2-day testing effort on RC2 involving
              entire community including all component teams. In an effort to
              mix things up and hold off the onset of &quot;tester
              fatigue&quot;, each component team will be designating one team
              member that will be assigned to test some other component.</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="RC3"></a>RC3</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Goals:</td>
            <td width="75%">
              <ul>
                <li>Accurate prioritization of all outstanding defects.
                <li>No outstanding P1 defects.
                <li>As few P2 defects as possible.</li>
              </ul>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="TestPassUsingRC3"></a>Test pass using RC3</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Notes:</td>
            <td width="75%">Concerted 1-day testing effort on RC3 involving
              entire community including all component teams, searching for
              regressions and on the lookout for undiscovered &quot;stop
              ship&quot; defects.</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="RC4"></a>RC4</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Goals:</td>
            <td width="75%">
              <ul>
                <li>Accurate prioritization of all outstanding defects.
                <li>Stable code base; no outstanding P1 defects. </ul>
            </td>
          </tr>
        </table>
      </td>
    </tr>
	
    <tr>
      <td width="20%" valign="top" align="left"><a name="R3.5"></a>Release 3.5</b></td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Goal:</td>
            <td width="75%">Ship Eclipse 3.5 during the last week of June.</td>
          </tr>
          <tr>
            <td width="25%">Notes:</td>
            <td width="75%">There is no formal test pass for RC4 and beyond other 
              than to check for last minute regressions. We will perform sanity 
              checking focused on documentation. Release 3.5 should be complete 
              and available for download as soon as we are satisfied with it.</td>
          </tr>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<table cellspacing="5" cellpadding="2" width="100%" border="0">
  <tbody>
    <tr>
      <td valign="top" align="left" colspan="2"><b>Fix pass rules of engagement</b></td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="FixPassAfterRC"></a>May 5-16</b><br>
        contributions to RC1</td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Focus:</td>
            <td width="75%">(1) P1 defects, (2) performance defects, (3) special 
              &quot;polish&quot; items. Fixing other defects has lower priority.</td>
          </tr>
          <tr>
            <td width="25%">Fix approval:</td>
            <td width="75%">Another committer must +1 your bug report. All changes 
              must have their associated bug reports tagged 3.5RC1. (Ongoing changes 
              to component documentation do not require special approval.)</td>
          </tr>
          <tr>
            <td width="25%">API change approval:</td>
            <td width="75%">PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.3, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.
              </td>
          </tr>
          <tr>
            <td width="25%">Notification requirements:</td>
            <td width="75%">None.</td>
          </tr>
          <tr>
            <td width="25%">Extra checking requirements:</td>
            <td width="75%">One additional committer must check all code changes 
              prior to release. </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="FixPassAfterRC1"></a>May 
        19-May 23</b><br>
        contributions to RC2</td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Focus:</td>
            <td width="75%">(1) P1 defects, (2) performance defects, (3) special 
              &quot;polish&quot; items. Fixing other defects has lower priority.</td>
          </tr>
          <tr>
            <td width="25%" height="48">Fix approval:</td>
            <td width="75%" height="48">Two committers must +1 your bug report. 
              All changes must have their associated bug reports tagged 3.5RC2. 
              (Ongoing changes to component documentation do not require special 
              approval.)</td>
          </tr>
          <tr>
            <td width="25%">API change approval:</td>
            <td width="75%">PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.3, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.</td>
          </tr>
          <tr>
            <td width="25%" height="16">Notification requirements:</td>
            <td width="75%" height="16">None.</td>
          </tr>
          <tr>
            <td width="25%" height="16">Extra checking requirements:</td>
            <td width="75%" height="16">Two additional committers must check all 
              code changes prior to release. </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="FixPassAfterRC2"></a>May 
        26-May 30</b><br>
        contributions to RC3</td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Focus:</td>
            <td width="75%">Serious defects only; documentation.</td>
          </tr>
          <tr>
            <td width="25%">Fix approval:</td>
            <td width="75%"> Two committers and a component lead must +1 your 
              bug report. All changes must have their associated bug reports tagged 
              3.5RC3. (Ongoing changes to component documentation do not require 
              special approval.)</td>
          </tr>
          <tr>
            <td width="25%">API change approval:</td>
            <td width="75%">PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.3, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.</td>
          </tr>
          <tr>
            <td width="25%">Notification requirements:</td>
            <td width="75%">Announce bug numbers of intended non-doc changes to <a href="mailto:platform-releng-dev@eclipse.org">platform-releng-dev@eclipse.org</a>
              mailing list.</td>
          </tr>
          <tr>
            <td width="25%">Extra checking requirements:</td>
            <td width="75%">Two additional committers must check all code changes 
              prior to release. Person who reported bug should mark the bug as 
              verified once they have retested.</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="top" align="left"><b><a name="FixPassAfterRC3"></a>June 
        2-June 6</b><br>
        contributions to RC4</td>
      <td>
        <table cellspacing="0" cellpadding="5" width="100%" border="1">
          <tr>
            <td width="25%">Focus:</td>
            <td width="75%">Serious defects only; documentation.</td>
          </tr>
          <tr>
            <td width="25%">Fix approval:</td>
            <td width="75%">Component lead plus one other component lead must 
              approve all work on a component. In addition, any component lead 
              can veto a change with cause. No changes are to be released without 
              associated bug report tagged 3.5RC4 including risk assessment and 
              prior approvals. (Ongoing changes to component documentation do 
              not require special approval.)</td>
          </tr>
          <tr>
            <td width="25%">API change approval:</td>
            <td width="75%">PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.3, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.</td>
          </tr>
          <tr>
            <td width="25%">Notification requirements:</td>
            <td width="75%">Announce bug numbers of intended non-doc changes to <a href="mailto:platform-releng-dev@eclipse.org">platform-releng-dev@eclipse.org</a>
              mailing list.</td>
          </tr>
          <tr>
            <td width="25%">Extra checking requirements:</td>
            <td width="75%">Two additional committers must check all code
              changes prior to release. Person who reported bug should mark the
              bug as verified once they have retested.</td>
          </tr>
        </table>   
    </div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
