<?php 

class ParceHtml {

    public static function replaceSubstring(string $text, string $searchString, string $replacementString ) : string 
    {   
        $splitedString = explode(" ", $searchString);
        $parcedText = preg_replace_callback( self::generateRegExpression($splitedString), function ($matches)
        {
            $cleanString = strtolower(strip_tags($matches[0]));
            preg_match_all("/(?:<[^>]+>)/", $matches[0], $cleanTags);
            return $cleanString.implode("", $cleanTags[0]);
        },
        $text);
        return str_replace(strtolower($searchString), $replacementString, $parcedText);
    }

    private static function generateRegExpression(array $words):string
    {
        $regex = "/";
        foreach($words as $key => $word) {
            if($key == 0){
                $regex .= "[".strtoupper($word[0]).strtolower($word[0])."]".substr($word, 1);
            }else{
                $regex .= $word;
            }
            if($key != count($words)-1) {
                $regex .= "(?:\s*<[^>]+>\s*)*\s+(?:\s*<[^>]+>\s*)*";
            }
        }
        $regex .= "/";
        return $regex;
    }

}