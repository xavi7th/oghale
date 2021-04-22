import '@public-assets/js/bootstrap';

var owl = $( '.owl-carousel' );

// If you check this out you will see that the length of tjis DOM node is 0. The reason is that this file fires before the HTML have been placed in the DOM tree.
// Look at the bootstrap file imported here and you will see that the last thing there is that the Svelte App is being mounted to the DOM. This is an asynchronous method. That means line 3 here will fire immediately and most likely before the App has been mounted to the DOM.
// The best thing then is to take this code into the Svelte App instead and the Svelte App entry point is the Page we are currently loading. For the home page that is Home.svelte
console.log( owl );
