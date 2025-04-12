<?php

$config = require("config.php");

$db = new Database($config["database"], "root", "369036");

$products = $db->query("SELECT * FROM products")->fetchAll();

// dd($products);

$pageTitle = "Pure Zen Essence | Beauty By Nature";

$pageDescription = "Pure Zen Essence is a family-owned natural products business proudly rooted in the heart of Wakefield Savannah, St. Catherine, Jamaica.";

require("views/index.view.php");
