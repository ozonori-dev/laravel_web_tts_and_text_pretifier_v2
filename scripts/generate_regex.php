<?php

$base = [
    "melakukan" => ["ngelakuin", "lakuin"],
    "memperhatikan" => ["merhatiin", "perhatiin"],
    "menyelesaikan" => ["nyelesain", "selesain"],
    "memperbaiki" => ["benerin", "perbaikin"],
    "mempelajari" => ["pelajarin", "pelajariin"],
    "mengingat" => ["nginget", "inget"],
    "memahami" => ["paham", "ngerti"],
    "membandingkan" => ["bandingin", "bandingkan"],
    "menyusun" => ["nyusun", "susun"],
    "menyampaikan" => ["nyampein", "sampaiin"]
];

$result = [];

foreach ($base as $formal => $variants) {
    foreach ($variants as $v) {
        $result[] = [
            "pattern" => "\\b".$formal."\\b",
            "replace" => $v
        ];
    }
}

file_put_contents(
    "generated_regex.json",
    json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

echo "Generated ".count($result)." rules\n";
