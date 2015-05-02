<?php

    class UrlUtil
    {
        public static function GetLinkParam($arParams)
        {
            $linkParam = "";

            foreach ($arParams as $key => $value)
            {
                if (strlen($value) > 0)
                {
                    $linkParam .= "&" . $key . "=" . $value;
                }
            }
            
            return $linkParam;
        }
    } // Utils
