## Guided tours Change-Log

### 2017-09-25  Thomas Deuling  <typo3@coding.ms>

*	[FEATURE] Adding Extension manager debug setting for activating debug output in JavaScript console.

### 2017-03-27  Thomas Deuling  <typo3@coding.ms>

*	[FEATURE] Placement now allows the value auto, which automatically identify the best placement.
*	[FEATURE] Starting next tour is now possible by stepByKey (more information in Readme.md)
*	[BUGFIX] Fix for content HTML validation
*	[TASK] Insert new designed extension icon
*	[FEATURE] Starting next tour is now possible by stepByKey (more information in Readme.md)

### 2017-03-27  Thomas Deuling  <typo3@coding.ms>

*	[TASK] Dont-show-again checkbox now disables and ends the current tour
*	[TASK] Conditional Tours, depending on TYPO3 major version
*	[FEATURE] Allow icons by icon identifier in Popover content
*	[TASK] Refactor available tours (moving steps into *.yaml files, using data-attributes only)
*	[TASK] Rebuild step configuration files into *.yaml files, so that the Page-TypoScript is not so overloaded. This 
	*.yaml files will be loaded at the moment the tour needs to be start.
*	[TASK] GuideUtility now provides an addTour method, which registers new tours in the system

### 2017-03-26  Thomas Deuling  <typo3@coding.ms>

*	[TASK] Remove deprecated functions in PageRenderer
*	[FEATURE] Integrating backdrop feature
*	[TASK] Localization handling refactored - removing deprecated functions
*	[TASK] Bootstrap-Tour library update to version 0.11.0
*	[TASK] ext_tables.php refactoring

### 2017-01-18  Thomas Deuling  <typo3@coding.ms>

*	[TASK] Optimization of strip tags

### 2017-01-16  Thomas Deuling  <typo3@coding.ms>

*	[TASK] Mirgation for TYPO3 8.x
*	[FEATURE] Adding configuration merge for overwriting tours by user TypoScript
*	[TASK] Translations optimized