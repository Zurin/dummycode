<?php
        class SubstringCount
        {
            public function countSubstr($str)
            {
                $alph = str_split($str);
                $substr;
                foreach ($alph as $key => $char) {
                    if (strpos($substr, $char) !== false) {
                        break;
                    }
                    $substr .= $char;
                }
                return strlen($substr);
            }
        }
?>