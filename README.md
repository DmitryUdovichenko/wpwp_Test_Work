# wpwp_Test_Work
 Test work for wpwp

**Write a static class method that takes three parameters: text, a search string (it can consist of one word or more, the number is not limited), a replacement string (an HTML tag is possible).**
This method searches for a substring in the text and changes it to a replacement string, it is IMPORTANT to take into account the fact that this text comes from the editor, where HTML tags are possible, and after replacing HTML must remain valid, that is, if we search for `"lorem ipsum"` in the string, replacing to `"<img src =" ">"`, then in the line `"lorem <b> ipsum dolor sit </b>"` the output should be `"<img src =" "> <b> dolor sit </b>"`.
**Consider that tags can contain any attributes.**