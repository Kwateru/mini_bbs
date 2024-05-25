<?php
// $birthday = '1990年10月32日';

function getAge($birthday)
{

    // 日付の形式チェック（4桁の年 + "年" + 2桁の月 + "月" + 2桁の日 + "日"）
    // 吉村さんコードレビュー：日付を扱うDatetimeやparseにリファクタ（今は文字列）
    if (!preg_match('/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/', $birthday)) {
        echo 'エラーです。生年月日を見直してください。';
        return;
    }

    // 現在の日付
    date_default_timezone_set('Asia/Tokyo');
    $now = date('Ymd');

    // 生年月日を整形
    $birthdayFormat = str_replace(['-', '-', '-'], '', $birthday);
    // 未来日付は除外
    if ($now < $birthdayFormat) {
        echo 'エラーです。生年月日を見直してください。';
        return;
    }

    // 年齢計算
    $age = floor(($now - $birthdayFormat) / 10000);
    return $age . '歳';
}

function getBirthday($birthday)
{
    $birthdayFormat = str_replace(['-', '-'], ' / ', $birthday);
    return $birthdayFormat;
}
