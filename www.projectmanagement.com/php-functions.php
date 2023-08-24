<?php

function msgError($title, $message)
{
    echo '
        <script>
            window.onload = function() {
            // Show an info message using Toastr
            toastr.error("'. $message . '", "' . $title . '");
            };
        </script>
    ';
}

function msgSuccess($title, $message)
{
    echo '
        <script>
            window.onload = function() {
            // Show an info message using Toastr
            toastr.success("'. $message . '", "' . $title . '");
            };
        </script>
    ';
}
function msgInfo($title, $message)
{
    echo '
        <script>
            window.onload = function() {
            // Show an info message using Toastr
            toastr.info("'. $message . '", "' . $title . '");
            };
        </script>
    ';
}
function msgWarning($title, $message)
{
    echo '
        <script>
            window.onload = function() {
            // Show an info message using Toastr
            toastr.warning("'. $message . '", "' . $title . '");
            };
        </script>
    ';
}