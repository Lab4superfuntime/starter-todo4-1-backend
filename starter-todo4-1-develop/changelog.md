# Change Log

Team membership:  Teah Elaschuk (Captain) &  Nathan Miles 
Team conventions: Allman notation, markdown for changelog
Changelog format: [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)

## *Version 1.0.0*
Release Date: 2017-10-12

### Added
	- created starter project (TE)
	- created changelog (TE)

## *Version 1.0.1*
Release Date: 2017-10-12

### Added
    - models/Tasks.php: added task model (TE)
### Updated 
    - config/autoload.php: preloading model (TE)
    
## *Version 1.0.2*
Release Date: 2017-10-12
    
### Updated 
    - views/homepage.php updated to track the amount of issues and list the issues (NM)
    - core/MY_Controller.php updated the render (NM)
    - controllers/Welcome.php updated to allow connection to views/homepage.php 
    and update tasks and create a list of tasks (NM)

## *Version 1.0.3*
Release Date: 2017-10-14

### Added
    - views/template_secondary.php: modified the original template to have bootstrap panels for the two organized task lists (TE)
    - controllers/Views.php: controller for the Work page, handles retrieving and sorting data to be displayed (TE)
    - view/by_priority.php: the layout for the Tasks by Priority table on the Work page (TE)
    - view/by_category.php: the layout for the Tasks by Category table on the Work page (TE)
    
### Updated 
    - config/config.php: changed menu link for 'work' (TE)
    - models/Tasks.php: added getCategorizedTasks and orderByCategory functions (TE)
 
## *Version 1.0.4*
Release Date: 2017-10-15

### Added
    - libraries/Parsedown.php from a copy paste from a github account (NM)
    - data/jobs.md and added some fake jobs using the correct format (NM)
    - controllers/Helpme.php allowed for jobs.md to be loaded and displayed correctly (NM)
### Updated 
    - config/autoload.php updated path to parsedown.php library (NM)
    - config/config.php corrected path to helpme.php

## *Version 1.1*
Release Date: 2017-10-15
    
## *Version 1.1.1*
Release Date: 2017-10-19

### Added
    - views/itemlist.php setup an itemlist to display in the Maintance tab (NM)
    - views/oneitem.php setup a different way to display in Maintance tab (NM)
    - controllers/Mtce.php Controller to control Maintance Tab (MN)
### Updated 
    - config/config.php added Mtce controller to the connection to Maintance (NM)
    - views/template_secondary.php corrected bootstrap error
    - README.md updated with the correct update
   
## *Version 1.1.2*
Release Date: 2017-10-19

### Added
    - views/itemnav.php: created pagination navbar (TE)
### Updated 
    - controllers/Mtce.php: added functionality for showing a number of items per page (TE)
    - views/itemlist.php: placed pagination navbar above table to be displayed in maintenance page (TE)
    
## *Version 1.1.3*
Release Date: 2017-10-19

### Added
    - tmp folder to put session data in (NM)
    - controllers/Roles.php allowed for roles to be used. (NM)
### Updated 
    - controllers/Mtce.php updated to allow users to display on the maintance page (NM)
    - gitignore added everything that appears in tmp folder to git ignore (NM)
    - config/config.php added ability to have sessions (NM)
    - config/autoload.php pulled in sessions in the library (NM)
    - config/constant.php added the two usuers guest and owner (NM)
    
## *Version 1.1.4*
Release Date: 2017-10-19

### Added

### Updated 
    - config/config.php changed the session save path to correct issue (NM)
    - cotrollers/Views.php Added new functionality complete() and ability to complete tasks (NM)
    - core/Memory_Model.php corrected issue that had the wrong variable name (NM)
    - views/by_category.php updated to be able to have boxes to click and allow complete (NM)
    - views/by_priority.php updated to be able to have boxes to click and allow complete (NM)

## *Version 1.1.5*
Release Date: 2017-10-19

### Added
    - views/oneitemx.php: variation of oneitem.php - links item ID to the edit page (TE)
    - views/itemadd.php: the create new item button for owners (TE)

### Updated 
    - controllers/Mtce.php: updated page to have different functionality depending on the user role (TE)

## *Version 1.1.6*
Release Date: 2017-10-20

### Added
    - views/itemedit.php: page layout for editing a task (TE)

### Updated 
    - models/App.php: bug fix, provided default values for work methods (TE)
    - core/Memory_Model.php: bug fix, altered highest() function (TE)
    - models/Tasks.php: added form validation rules (TE)
    - controllers/Mtce.php: added functions add(), edit(), showit(), submit(), cancel(), and delete() (TE)

## *Version 1.1.7*
Release Date: 2017-10-22

### Added
    

### Updated 
    - views/itemedit.php added new properties to todo tasks edit form (NM)
    - controllers/Mtce.php added code to allow size group and status to be added in the showit() (NM)

## *Version 1.2.1*
Release Date: 2017-11-02

### Added
    - phpunit.xml.dist copied from github (NM)
    - tests/ setup foulder(NM)
    - tests/Bootstrap.php copied public/index (NM)
    - model/Entity.php added set functions for each task (NM)
    - model/Task.php added new magic tasks functionality (NM)

### Updated 


## *Version 1.2.2*
Release Date: 2017-11-05

### Added


### Updated
    - model/Task.php updated rules to tasks (NM)

## *Version 1.2.3*
Release Date: 2017-11-05

### Added
    - tests/TaskTest.php: created phpunit testing file with functions for checking form validation

### Updated
    - moved Entity.php from models folder to core folder and updated references to Entity.php in autoload.php and Task.php (TE)
    - models/Task.php: altered several methods to return on failure rather than throw errors (TE)

## *Version 1.2.4*
Release Date: 2017-11-05

### Added
    - tests/TaskListTest.php: created phpunit testing file with functions for checking form validation (NM)

### Updated
    - models/Tasks.php added a count to count completed and uncompleted tasks(NM)

## *Version 1.2.4*
Release Date: 2017-11-05

### Added
    - .travis.yml: added travis CI file (TE)

## *Version 1.2.5*
Release Date: 2017-11-16

### Added

DATA
    - added tasks xml file 

## *Version 1.2.6*
Release Date: 2017-11-19

### Added
    - core/XML_Model.php added new access to the xml tasks (NM)
    
### Updated
    - models/Tasks.php extended xml(NM)
    - core/My_Model.php added XML_Model to it(NM)
