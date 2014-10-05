Simple-Mysearch
===============

What Is This?
-------------

This is a simple search module which searches all nodes in a database for a given word.
Search by title and content of the nodes.
You have to use URL structure such as /mysearch/%key for getting results.

Changes:
hook_menu - 'access arguments' must be array.
Themes have been used to split up logic and presentation.
The function 'mysearch_searchpage' has been moved to mysearch.pages.inc for more readable code.
The search query has been changed for taking into consideration databases scheme and
adding search by title and nodes content.
