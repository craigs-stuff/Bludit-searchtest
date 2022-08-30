# Bludit-searchtest
code for bludit search test for Pixacura css grid based themes

Using then default set up that I read in other Bludit themes seemed to work ok. However when I attempted make my own Bludit theme, I found that the standard method of using the plugin didn't work. Sometimes the page would break or results failed to appear.

As a result I developed a few lines (outwith the plugin) of code to ensure the plugin works as you would expect.

1. I added a 'Search' hyperlink in the nav section
2. The link uses an on click event to make a modal appear. The modal is located in the footer and set to display:none
3. Within the modal is the default code for the Bludit search plugin
4. When the search data is entered into the input box then the results are displayed on a 'search results page'
5. The SRP is an actual a theme template made in bludit, ***NOT*** a content page.
6. The code in the srp template is simple and relies on obtaining data from the $content object.
7. From there, css outputs the search results in a friendly format
