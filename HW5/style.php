<?php
    header('Content-type: text/css; charset:UTF-8');
?>

* {
    margin: 0;
    padding: 0;
    text-decoration: none;
}

button {
    cursor: pointer;
}

body {
    background-color: #F3F3F3;
}

.wrapper-main {
    width: 900px;
    margin: 0 auto;
}

header {
    width: calc(100% - 30px);
    height: 60px;
    padding: 0 15px;
    background-color: #FFF;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

.nav-header-main {
    height: 80%;
    display: flex;
    flex-direction: row;
}

.header-logo {
    width: 48px;
    padding-right: 20px;
}

.nav-header-main img {
    height: 100%;
}

.nav-header-main ul {
    height: 100%;
}

.nav-header-main ul li {
    list-style: none;
    float: left;
    height: 100%;
}

.nav-header-main ul li a {
    display: block;
    height: 100%;
    padding: 0 10px;
    border-radius: 6px;
    line-height: 48px;
    font-family: arial;
    font-size: 16px;
    color: #111;
    text-transform: uppercase;
}

.header-login {
    height: 60%;
    display: flex;
    flex-direction: row;
}

.header-login form {
    height: 100%;
}

.header-login form input {
    height: 100%;
    width: 160px;
    padding: 0 15px;
    border: none;
    border-radius: 4px;
    background-color: #F6F6F6;
    float: left;
    margin-left: 8px;
    font-family: arial;
}

.header-login form button {
    height: 100%;
    padding: 0 10px;
    border: none;
    border-radius: 4px;
    background-color: teal;
    margin-left: 8px;
    font-family: arial;
    font-size: 13px;
    color: #FFF;
    text-transform: uppercase;
    text-align: center;
}

.header-signup {
    height: 100%;
    width: 70px;
    padding: 0 6px;
    border: none;
    border-radius: 4px;
    margin-left: 8px;
    font-family: arial;
    font-size: 13px;
    line-height: 36px;
    color: #111;
    text-transform: uppercase;
    text-align: center;
}

main {
    padding-top: 20px;
}

.section-default {
    width: 100%;
    padding: 20px;
    border-radius: 6px;
    background-color: #FFF;
}

.login-status {
    text-align: center;
    font-size: 26px;
    font-family: arial;
    color: teal;
}

h1 {
    text-align: left;
    font-size: 26px;
    font-family: arial;
    color: teal;
}

/* signup.php */

.form-signup {
    margin: 0 auto;
    padding-top: 20px;
    width: 250px;
}

.form-signup input {
    width: calc(100% - 30px);
    height: 30px;
    padding: 0 15px;
    margin-bottom: 6px;
    border: 1px solid #CCC;
    border-radius: 4px;
    background-color: #F6F6F6;
    float: left;
    font-family: arial;
}

.form-signup button {
    display: block;
    height: 40px;
    padding: 0 10px;
    margin-right: 25px;
    border: none;
    border-radius: 4px;
    background-color: #333;
    font-family: arial;
    font-size: 13px;
    color: #FFF;
    text-transform: uppercase;
    text-align: center;
}

.signuperror {
    padding-top: 14px;
    font-family: arial;
    font-size: 16px;
    color: red;
    text-align: center;
}

.signupsuccess {
    padding-top: 14px;
    font-family: arial;
    font-size: 16px;
    color: green;
    text-align: center;
}

.uploaderror {
padding-top: 14px;
font-family: arial;
font-size: 16px;
color: red;
text-align: left;
}


.uploadsuccess {
padding-top: 14px;
font-family: arial;
font-size: 16px;
color: green;
text-align: left;
}

.uploadButton {
height: 25px;
padding: 0 10px;
border: none;
border-radius: 4px;
background-color: teal;
margin-left: 8px;
font-family: arial;
font-size: 13px;
color: #FFF;
text-transform: uppercase;
text-align: center;
}

table, th, td {
border: 1px solid black;
text-align: left;
}

h2 {
text-align: left;
font-size: 20px;
font-family: arial;
color: teal;
}