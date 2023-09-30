<?php

namespace Faker\Provider\bn_BD;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = ['দক্ষিন', 'পূর্ব', 'পশ্চিম', 'উত্তর', 'নতুন', 'লেইক', 'পোর্ট'];
    protected static $citySuffix = ['টাউন', 'তলা', 'হাট', 'খানা'];

    protected static $streetNames = [
        'বরকত', 'হাজী', 'করিমউদ্দিন',
    ];

    protected static $streetSuffix = [
        'তলী', 'গলি', 'চিপা', 'ব্রীজ', 'সড়ক', 'বাইপাস', 'ক্যাম্প',
    ];
    protected static $postcode = ['#####', '#####-####'];
    protected static $state = [
        'খুলনা', 'বরিশাল', 'চিটাগং', 'ঢাকা', 'রাজশাহী', 'সিলেট', 'কুমিল্লা',
    ];
    protected static $country = [
        'অস্ট্রিয়া',
        'অস্ট্রেলিয়া',
        'অ্যাঙ্গোলা',
        'অ্যান্টার্কটিকা',
        'অ্যাসসেনশন আইল্যান্ড',
        'আইভরি কোস্ট',
        'আইল অফ ম্যান',
        'আইসল্যান্ড',
        'আজারবাইজান',
        'আফগানিস্তান',
        'আমেরিকান সামোয়া',
        'আয়ারল্যান্ড',
        'আরুবা',
        'আর্জেন্টিনা',
        'আর্মেনিয়া',
        'আলজেরিয়া',
        'আলব্যানিয়া',
        'আলান্ড দ্বীপপুঞ্জ',
        'ইউক্রেইন',
        'ইকুয়েডর',
        'ইতালী',
        'ইন্দোনেশিয়া',
        'ইফিওপিয়া',
        'ইয়েমেন',
        'ইরাক',
        'ইরান',
        'ইরিত্রিয়া',
        'ইস্রায়েল',
        'উগান্ডা',
        'উজবেকিস্তান',
        'উত্তর কোরিয়া',
        'উত্তরাঞ্চলীয় মারিয়ানা দ্বীপপুঞ্জ',
        'উরুগুয়ে',
        'এন্টিগুয়া ও বারবুডা',
        'এল সালভেদর',
        'এস্তোনিয়া',
        'এ্যাঙ্গুইলা',
        'এ্যান্ডোরা',
        'ওমান',
        'ওয়ালিস ও ফুটুনা',
        'কঙ্গো - ব্রাজাভিল',
        'কঙ্গো-কিনশাসা',
        'কমোরোস',
        'কম্বোডিয়া',
        'কসোভো',
        'কাজাকস্থান',
        'কাতার',
        'কানাডা',
        'কিউবা',
        'কিউরাসাও',
        'কিরিবাতি',
        'কির্গিজিয়া',
        'কুউটা এবং মেলিলা',
        'কুক দ্বীপপুঞ্জ',
        'কুয়েত',
        'কেনিয়া',
        'কেপভার্দে',
        'কেম্যান দ্বীপপুঞ্জ',
        'কোকোস (কদ্বীপপুঞ্জ',
        'কোলোম্বিয়া',
        'কোস্টারিকা',
        'ক্যানারি দ্বীপপুঞ্জ',
        'ক্যামেরুন',
        'ক্যারিবিয়ান নেদারল্যান্ডস',
        'ক্রিসমাস দ্বীপ',
        'ক্রোয়েশিয়া',
        'গাম্বিয়া',
        'গিনি',
        'গিনি-বিসাউ',
        'গিয়ানা',
        'গুয়াদেলৌপ',
        'গুয়াম',
        'গোয়াটিমালা',
        'গ্যাবন',
        'গ্রাঞ্জি',
        'গ্রীনল্যান্ড',
        'গ্রীস',
        'গ্রেনাডা',
        'ঘানা',
        'চাদ',
        'চিলি',
        'চীন',
        'চেক প্রজাতন্ত্র',
        'জর্জিয়া',
        'জর্ডন',
        'জাপান',
        'জাম্বিয়া',
        'জার্মানি',
        'জার্সি',
        'জিবুতি',
        'জিব্রাল্টার',
        'জিম্বাবোয়ে',
        'জ্যামাইকা',
        'টুভালু',
        'টোকেলাউ',
        'টোগো',
        'টোঙ্গা',
        'ট্রিস্টান ডা কুনহা',
        'ডেনমার্ক',
        'ডোমিনিকা',
        'ডোমেনিকান প্রজাতন্ত্র',
        'তাইওয়ান',
        'তাজিকস্থান',
        'তাঞ্জানিয়া',
        'তিউনিশিয়া',
        'তিমুর-লেস্তে',
        'তুরস্ক',
        'তুর্কমেনিস্তান',
        'তুর্কস ও কাইকোস দ্বীপপুঞ্জ',
        'ত্রিনিনাদ ও টোব্যাগো',
        'থাইল্যান্ড',
        'দক্ষিণ আফ্রিকা',
        'দক্ষিণ কোরিয়া',
        'দক্ষিণ জর্জিয়া ও দক্ষিণ স্যান্ডউইচ দ্বীপপুঞ্জ',
        'দক্ষিন সুদান',
        'দিয়েগো গার্সিয়া',
        'নরওয়ে',
        'নাইজার',
        'নাইজেরিয়া',
        'নাউরু',
        'নামিবিয়া',
        'নিউ ক্যালেডোনিয়া',
        'নিউজিল্যান্ড',
        'নিউয়ে',
        'নিকারাগুয়া',
        'নিরক্ষীয় গিনি',
        'নিরফোক দ্বীপ',
        'নেদারল্যান্ডস',
        'নেপাল',
        'পর্তুগাল',
        'পশ্চিম সাহারা',
        'পাকিস্তান',
        'পানামা',
        'পাপুয়া নিউ গিনি',
        'পালাউ',
        'পিটকেয়ার্ন দ্বীপপুঞ্জ',
        'পিরু',
        'পুয়ের্তো রিকো',
        'পোল্যান্ড',
        'প্যারাগুয়ে',
        'ফকল্যান্ড দ্বীপপুঞ্জ',
        'ফরাসী গায়ানা',
        'ফরাসী দক্ষিণাঞ্চল',
        'ফরাসী পলিনেশিয়া',
        'ফিজি',
        'ফিনল্যান্ড',
        'ফিলিপাইন',
        'ফিলিস্তিন অঞ্চলসমূহ',
        'ফ্যারও দ্বীপপুঞ্জ',
        'ফ্রান্স',
        'বতসোয়ানা',
        'বসনিয়া ও হার্জেগোভিনা',
        'বাংলাদেশ',
        'বারবাদোস',
        'বারমুডা',
        'বাহরাইন',
        'বাহামা দ্বীপপুঞ্জ',
        'বুরকিনা ফাসো',
        'বুরুন্ডি',
        'বুলগেরিয়া',
        'বেনিন',
        'বেলজিয়াম',
        'বেলিজ',
        'বেলোরুশিয়া',
        'বোলিভিয়া',
        'ব্রাজিল',
        'ব্রিটিশ ভারত মহাসাগরীয় অঞ্চল',
        'ব্রিটিশ ভার্জিন দ্বীপপুঞ্জ',
        'ব্রুনেই',
        'ভানুয়াটু',
        'ভারত',
        'ভিয়েতনাম',
        'ভুটান',
        'ভেনেজুয়েলা',
        'ভ্যাটিকান সিটি',
        'মঙ্গোলিয়া',
        'মধ্য আফ্রিকার প্রজাতন্ত্র',
        'মন্টসেরাট',
        'মন্টিনিগ্রো',
        'মরিতানিয়া',
        'মরিশাস',
        'মাইক্রোনেশিয়া',
        'মাদাগাস্কার',
        'মায়ানমার (বা',
        'মায়োত্তে',
        'মার্কিন ভার্জিন দ্বীপপুঞ্জ',
        'মার্কিন যুক্তরাষ্ট্র',
        'মার্টিনিক',
        'মার্শাল দ্বীপপুঞ্জ',
        'মালদ্বীপ',
        'মালয়েশিয়া',
        'মালাউই',
        'মালি',
        'মাল্টা',
        'মিশর',
        'মেক্সিকো',
        'মোজাম্বিক',
        'মোনাকো',
        'মোরক্কো',
        'মোল্দাভিয়া',
        'ম্যাকাও এস এ আর চায়না',
        'ম্যাসাডোনিয়া',
        'যুক্তরাজ্য',
        'যুক্তরাষ্ট্রের পার্শ্ববর্তী দ্বীপপুঞ্জ',
        'রাশিয়া',
        'রিইউনিয়ন',
        'রুমানিয়া',
        'রুয়ান্ডা',
        'লাইবেরিয়া',
        'লাওস',
        'লাক্সেমবার্গ',
        'লাত্ভিয়া',
        'লিচেনস্টেইন',
        'লিথুয়ানিয়া',
        'লিবিয়া',
        'লেবানন',
        'লেসোথো',
        'শ্রীলঙ্কা',
        'শ্লোভাকিয়া',
        'সংযুক্ত আরব আমিরাত',
        'সলোমন দ্বীপপুঞ্জ',
        'সাইপ্রাস',
        'সাওটোমা ও প্রিন্সিপি',
        'সান মারিনো',
        'সামোয়া',
        'সার্বিয়া',
        'সিঙ্গাপুর',
        'সিন্ট মার্টেন',
        'সিয়েরালিওন',
        'সিরিয়া',
        'সিসিলি',
        'সুইজারল্যান্ড',
        'সুইডেন',
        'সুদান',
        'সুরিনাম',
        'সেনেগাল',
        'সেন্ট কিটস ও নেভিস',
        'সেন্ট পিয়ের ও মিকুয়েলন',
        'সেন্ট বারথেলিমি',
        'সেন্ট ভিনসেন্ট ও দ্যা গ্রেনাডিনস',
        'সেন্ট মার্টিন',
        'সেন্ট লুসিয়া',
        'সেন্ট হেলেনা',
        'সোমালিয়া',
        'সোয়াজিল্যান্ড',
        'সৌদি আরব',
        'স্পেন',
        'স্বালবার্ড ও জান মেয়েন',
        'স্লোভানিয়া',
        'হংকং এসএআর চীনা',
        'হণ্ডুরাস',
        'হাইতি',
        'হাঙ্গেরি',
    ];
    protected static $cityFormats = [
        '{{cityPrefix}}{{citySuffix}}',

    ];
    protected static $streetNameFormats = [
        '{{banglaStreetName}} {{streetSuffix}}',

    ];
    protected static $streetAddressFormats = [
        '{{streetNumber}} {{streetName}}',
    ];
    protected static $addressFormats = [
        '{{streetAddress}}, {{city}} {{state}}',
    ];

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public static function state()
    {
        return static::randomElement(static::$state);
    }

    public static function streetNumber()
    {
        return Utils::getBanglaNumber(self::numberBetween(1, 100));
    }

    public static function banglaStreetName()
    {
        return static::randomElement(static::$streetNames);
    }
}



