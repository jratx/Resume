<!DOCTYPE html><html><head><meta charset="UTF-8">
<title>Resume</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway:500,200,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="jessy_dirado_cv.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-aria.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js"></script>
<script>angular.module("Resume",["ngMaterial"]).component("resume",{transclude:true,template:'<div class="resume">\n    <section class="main" ng-transclude></section>\n  </div>'}).component("resumeHeading",{controllerAs:"r",transclude:true,bindings:{firstName:"@",lastName:"@",website:"@",phone:"@",email:"@",github:"@",linkedin:"@"},template:'<div class="header">\n    <div class="page-title-container">\n      <h1 class="page-title page-title-first">{{r.firstName}}</h1>\n      <h1 class="page-title page-title-last">{{r.lastName}}</h1>\n    </div>\n    <div class="header-icons">\n      <a ng-if="r.website" class="md-subhead page-subhead" ng-href="https://{{r.website}}" target="_blank">\n        <i class="fa fa-lg fa-code"></i>{{r.website}}\n      </a>\n      <span ng-if="r.phone" class="md-subhead page-subhead">\n        <i class="fa fa-lg fa-phone"></i>{{r.phone}}\n      </span>\n      <a ng-if="r.email" class="md-subhead page-subhead" ng-href="mailto:{{r.email}}" target="_blank">\n        <i class="fa fa-lg fa-envelope"></i>{{r.email}}\n      </a>\n      <a ng-if="r.github" class="md-subhead page-subhead" ng-href="https://github.com/{{r.github}}" target="_blank">\n        <i class="fa fa-lg fa-github"></i>{{r.github}}\n      </a>\n      <a ng-if="r.linkedin" class="md-subhead page-subhead" ng-href="https://linkedin.com/in/{{r.linkedin}}" target="_blank">\n        <i class="fa fa-lg fa-linkedin-square"></i>{{r.linkedin}}\n      </a>\n    </div>\n  </div>\n  <ng-transclude></ng-transclude>'}).component("resumeBody",{transclude:true,template:'<div layout="row" ng-transclude></div>'}).component("resumeColumn",{transclude:true,template:"<div ng-transclude></div>"}).component("sidebarCategory",{controllerAs:"r",bindings:{name:"@"},transclude:true,template:'<div flex="" class="category-row">\n    <div class="category">\n      <h5 class="category-row-title">{{r.name}}</h5>\n      <ng-transclude></ng-transclude>\n    </div>\n  </div>'}).component("category",{controllerAs:"r",bindings:{name:"@"},transclude:true,template:'<div flex="" class="category-row">\n    <h4 class="category-row-title">{{r.name}}</h4>\n    <ng-transclude></ng-transclude>\n  </div>'}).component("categoryItem",{controllerAs:"r",bindings:{title:"@",subtitle:"@"},transclude:true,template:'<div class="category">\n      <h5 class="category-title md-body-2">{{r.title}}</h5>&nbsp;\n      <h5 class="category-subtitle md-caption">{{r.subtitle}}</h5>\n      <ul class="category-bullets" ng-transclude></ul>\n  </div>'});
</script>

</head><body ng-app="Resume" ng-cloak="">
    <resume>
        <resume-heading first-name="Jessy" last-name="Di Rado" github="https://github.com/jratx" email="jessy.dirado@gmail.com" phone="514-881-1721">
        </resume-heading>
        <resume-body>
            <resume-column flex="20">
                <sidebar-category name="Education">
                    <p>Herzing College</p>
                    <p>Graduated October 2016</p>
                    <p>Lester B. Pearson</p>
                    <p>Graduated June 2009</p>
                </sidebar-category>
                <!-- <sidebar-category name="Achievements">
                    <p>Penn App Finalist Spring 2016</p>
                    <p>Hophacks 2nd Place Spring 2016</p>
                    <p>Dankmeme Achievement Medal 2016</p>
                    <p>Dan Abromov's Top Follower 2016</p>
                    <p>Advanced Regents Diploma</p>
                </sidebar-category> -->
                <sidebar-category name="Coursework">
                    <p>Microsoft VB.Net applications</p>
                    <p>Object-oriented programming with JAVA</p>
                    <p>Database design and development with SQL Server</p>
                    <p>Internet programming with JavaScript, PHP and mobile technologies</p>
                </sidebar-category>
            </resume-column>
            <resume-column flex="80">
                <category name="Professional Experience">
                    <category-item title="Web Developer" subtitle="Building Blocks Tutorials (2016-2017)">
                        <li>Fitted the website with a control panel for the company to manage the backend</li>
                        <li>Created and Managed a functional MySQL database meeting the needs of the company</li>
                        <li>Maintained front end development and updates according to companies requests</li>
                    </category-item>
                    <category-item title="Web Development Intern" subtitle="Building Blocks Tutorials (Winter 2016)">
                        <li>Worked with other interns on developing web pages</li>
                        <li>Used Slack to collaborate with developers</li>
                        <li>Collaborated with other web developers on design and development</li>
                        <li>Used PHP &amp; JavaScript to create new features</li>
                    </category-item>
                </category>
                <category name="Projects">
                    <category-item title="KittyScrubber" subtitle="github.com/MadReza/KittyScrubber">
                        <li>Created a manga/comic book reader website</li>
                        <li>Constructing a script to read and reproduce readable web pages</li>
                        <li>Implemented Bootstrap framework</li>
                    </category-item>
                    <category-item title="Property Project" subtitle="Property Insight Hub">
                        <li>Co-founded Web-based company in 2016</li>
                        <li>Integrations with Centris &amp; MLS</li>
                        <li>Created multiple calculators and algorithms to aid in the purchasing of certain property types</li>
                        <li>Implemented Bootstrap &amp; Angular.js frameworks</li>
                    </category-item>
                    <category-item title="Gabriela Dowling" subtitle="Personal profile website"> 
                        <li>Created a personal website meeting the specified requirements</li>
                        <li>Using HTML CSS Javascript &amp; PHP</li>
                        <li>Implemented Bootstrap framework &amp; MVC</li>
                    </category-item>
                </category>
                <category name="Skills">
                    <category-item title="Web Development">
                        <li><strong>Front End</strong> I can develop any look or style</li>
                        <li><strong>Back end</strong> I create and manage a wide verity of databases</li>
                        <li><strong>Full Stack</strong> When challenged with the task of producing an entire website, I have the skills and knowledge to follow through</li>
                    </category-item>
                    <category-item title="Technologies">
                        <li><strong>Experienced With</strong> Composer \ XML \ NetBeans \ WAMP \ GitHub \ WordPress \ SublimeText</li>
                        <li><strong>Programming</strong> HTML \ CSS \ Android \ Javascript \ PHP \ Java</li>
                        <li><strong>Databases</strong> MySQL \ SQLite</li>
                        <li><strong>Frameworks</strong> Laravel \ Symphony \ AngularJS \ Bootstrap</li>
                    </category-item>
                </category>
            </resume-column>
        </resume-body>
    </resume>


</body></html>
