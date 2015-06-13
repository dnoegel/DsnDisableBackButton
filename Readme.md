# DsnDisableBackButton
Disables the back button in Shopware's backend in order to prevent accidental navigation.

# Install
Just install and activate the plugin. After clearing the cache and reloading the backend, the backend should not 
react to clicks on the back button / back key anymore.

# Implementation
This plugin uses the pushstate/postate method, actually there does not seem to be a the "one and only" solution for this 
problem, so this might not work with some browsers.