<?php
//include_once ('FBToolbox.class.php');
//$fbToolboxObj = new FBToolbox($apiKey, $secretKey);
?>
<style>
.Common_Table{color:#FFFFFF;direction:rtl;width:710px;}
.Common_Table a{color:#FFFFFF}
.Common_Table tr:hover{background-color:activecaption;font-weight:bold;}
.Common_Table td:hover{font-size:18px;}
.Common_Table td:hover a{font-size:24px;font-weight:bold}
.Common_Table td {text-align:center;font-size:16px;}
.Common_THead{background-color:SteelBlue;font-weight:bold;text-align:center;font-size:20px}
.Common_THead td{font-size:18px}
.Common_TBODY{background-color:inactivecaption}
.content{font-family:tahoma;width:730px;margin-top:40px;text-align:center}
</style>
<script>
// function to publish application on user wall
function publishOnWall(){
	
	 var attachment = {
        'name':'برنامج تفسير القرآن الكريم',
        'href':'http://apps.facebook.com/quran_tafsir/',
        'description':'تستطيع بإذن الله عن طريق هذا البرنامج ،الإستماع و قراءة و تصفح و تفسير وترجمة القرآن الكريم آية آية إلى أكثر من 25 لغة والعديد من القراء والإطلاع على مختلف التفاسير لإبن كثير، الجلالين ، الطبري والقرطبي.',
        'media':[{
            'type':'image',
            'src':'http://prayers.jfntechnologie.com/tafsir_quran/img/quran_logo.jpg',
            'href':'http://www.facebook.com/apps/application.php?id=179229142087638'
            }]
    };

	Facebook.streamPublish('', attachment);
	
}

</script>



<!-- logo entete -->
<div style="margin:-14px 0 -66px;float:left">

<fb:iframe id="ifr_header" width="728" height="230" name="ifr_header" frameborder="0" src="http://prayers.jfntechnologie.com/prayers_time/illa_salati_watch.php"></fb:iframe>

</div>

<p style="text-align: right; margin-right: 80px;"><a style="font-size: 15px;" onclick="publishOnWall()" href="#">أنشر البرنامج ... جازاك كل الله خير </a></p>
<div class="content">

<div style="margin-bottom: 31px;">
<img style="width: 230px;" src="http://prayers.jfntechnologie.com/tafsir_quran/img/quran_logo.jpg">
<img style="" src="http://prayers.jfntechnologie.com/hadith_day/tafsir/img/tafsir_logo.png">

</div>

<table cellspacing="2" cellpadding="3" border="0" align="center" class="Common_Table"><thead class="Common_THead"><tr><td>رقم السورة</td><td>إسم السورة</td><td>الجــزء</td><td><div onclick="JavaScript:location.href='fahres.asp?order=3&amp;dir=ASC';" title=" عرض (رقم الصفحة)  تصاعديا" style="">رقم الصفحة</div></td><td><div onclick="JavaScript:location.href='fahres.asp?order=4&amp;dir=ASC';" title=" عرض (عدد الآيات)  تصاعديا" style="">عدد الآيات</div></td><td><div onclick="JavaScript:location.href='fahres.asp?order=5&amp;dir=ASC';" title=" عرض (تصنيفها)  تصاعديا" style="">تصنيفها</div></td></tr></thead><tbody class="Common_TBODY"><tr><td>1</td><td><a href="list.php?sorah=1"> الفاتحة</a></td><td> الجزء الأول</td><td>1</td><td>7</td><td> مكيّة </td></tr><tr><td>2</td><td><a href="list.php?sorah=2"> البقرة</a></td><td> الجزء الأول</td><td>2</td><td>286</td><td> مدنيّة </td></tr><tr><td>3</td><td><a href="list.php?sorah=3"> آل عمران</a></td><td> الجزء الثالث</td><td>50</td><td>200</td><td> مدنيّة </td></tr><tr><td>4</td><td><a href="list.php?sorah=4"> النساء</a></td><td> الجزء الرابع</td><td>77</td><td>176</td><td> مدنيّة </td></tr><tr><td>5</td><td><a href="list.php?sorah=5"> المائدة</a></td><td> الجزء السادس</td><td>106</td><td>120</td><td> مدنيّة </td></tr><tr><td>6</td><td><a href="list.php?sorah=6"> الأنعام</a></td><td> الجزء السابع</td><td>128</td><td>165</td><td> مكيّة </td></tr><tr><td>7</td><td><a href="list.php?sorah=7"> الأعراف</a></td><td> الجزء الثامن</td><td>151</td><td>206</td><td> مكيّة </td></tr><tr><td>8</td><td><a href="list.php?sorah=8"> الأنفال</a></td><td> الجزء التاسع</td><td>177</td><td>75</td><td> مدنيّة </td></tr><tr><td>9</td><td><a href="list.php?sorah=9"> التوبة</a></td><td> الجزء العاشر</td><td>187</td><td>129</td><td> مدنيّة </td></tr><tr><td>10</td><td><a href="list.php?sorah=10"> يونس</a></td><td> الجزء الحادي عشر</td><td>208</td><td>109</td><td> مكيّة </td></tr><tr><td>11</td><td><a href="list.php?sorah=11"> هود</a></td><td> الجزء الحادي عشر</td><td>221</td><td>123</td><td> مكيّة </td></tr><tr><td>12</td><td><a href="list.php?sorah=12"> يوسف</a></td><td> الجزء الثاني عشر</td><td>235</td><td>111</td><td> مكيّة </td></tr><tr><td>13</td><td><a href="list.php?sorah=13"> الرعد</a></td><td> الجزء الثالث عشر</td><td>249</td><td>43</td><td> مدنيّة </td></tr><tr><td>14</td><td><a href="list.php?sorah=14"> إبراهيم</a></td><td> الجزء الثالث عشر</td><td>255</td><td>52</td><td> مكيّة </td></tr><tr><td>15</td><td><a href="list.php?sorah=15"> الحجر</a></td><td> الجزء الرابع عشر</td><td>262</td><td>99</td><td> مكيّة </td></tr><tr><td>16</td><td><a href="list.php?sorah=16"> النحل</a></td><td> الجزء الرابع عشر</td><td>267</td><td>128</td><td> مكيّة </td></tr><tr><td>17</td><td><a href="list.php?sorah=17"> الإسراء</a></td><td> الجزء الخامس عشر</td><td>282</td><td>111</td><td> مدنيّة </td></tr><tr><td>18</td><td><a href="list.php?sorah=18"> الكهف</a></td><td> الجزء الخامس عشر</td><td>293</td><td>110</td><td> مدنيّة </td></tr><tr><td>19</td><td><a href="list.php?sorah=19"> مريم</a></td><td> الجزء السادس عشر</td><td>305</td><td>98</td><td> مدنيّة </td></tr><tr><td>20</td><td><a href="list.php?sorah=20"> طه</a></td><td> الجزء السادس عشر</td><td>312</td><td>135</td><td> مدنيّة </td></tr><tr><td>21</td><td><a href="list.php?sorah=21"> الأنبياء</a></td><td> الجزء السابع عشر</td><td>322</td><td>112</td><td> مدنيّة </td></tr><tr><td>22</td><td><a href="list.php?sorah=22"> الحج</a></td><td> الجزء السابع عشر</td><td>332</td><td>78</td><td> مدنيّة </td></tr><tr><td>23</td><td><a href="list.php?sorah=23"> المؤمنون</a></td><td> الجزء الثامن عشر</td><td>342</td><td>118</td><td> مدنيّة </td></tr><tr><td>24</td><td><a href="list.php?sorah=24"> النور</a></td><td> الجزء الثامن عشر</td><td>350</td><td>64</td><td> مدنيّة </td></tr><tr><td>25</td><td><a href="list.php?sorah=25"> الفرقان</a></td><td> الجزء الثامن عشر</td><td>359</td><td>77</td><td> مدنيّة </td></tr><tr><td>26</td><td><a href="list.php?sorah=26"> الشعراء</a></td><td> الجزء التاسع عشر</td><td>367</td><td>227</td><td> مدنيّة </td></tr><tr><td>27</td><td><a href="list.php?sorah=27"> النمل</a></td><td> الجزء التاسع عشر</td><td>377</td><td>93</td><td> مدنيّة </td></tr><tr><td>28</td><td><a href="list.php?sorah=28"> القصص</a></td><td> الجزء العشرون</td><td>385</td><td>88</td><td> مدنيّة </td></tr><tr><td>29</td><td><a href="list.php?sorah=29"> العنكبوت</a></td><td> الجزء العشرون</td><td>396</td><td>69</td><td> مدنيّة </td></tr><tr><td>30</td><td><a href="list.php?sorah=30"> الروم</a></td><td> الجزء الحادي والعشرون</td><td>404</td><td>60</td><td> مدنيّة </td></tr><tr><td>31</td><td><a href="list.php?sorah=31"> لقمان</a></td><td> الجزء الحادي والعشرون</td><td>411</td><td>34</td><td> مدنيّة </td></tr><tr><td>32</td><td><a href="list.php?sorah=32"> السجدة</a></td><td> الجزء الحادي والعشرون</td><td>415</td><td>30</td><td> مدنيّة </td></tr><tr><td>33</td><td><a href="list.php?sorah=33"> الأحزاب</a></td><td> الجزء الحادي والعشرون</td><td>418</td><td>73</td><td> مدنيّة </td></tr><tr><td>34</td><td><a href="list.php?sorah=34"> سبأ</a></td><td> الجزء الثاني والعشرون</td><td>428</td><td>54</td><td> مدنيّة </td></tr><tr><td>35</td><td><a href="list.php?sorah=35"> فاطر</a></td><td> الجزء الثاني والعشرون</td><td>434</td><td>45</td><td> مدنيّة </td></tr><tr><td>36</td><td><a href="list.php?sorah=36"> يس</a></td><td> الجزء الثاني والعشرون</td><td>440</td><td>83</td><td> مدنيّة </td></tr><tr><td>37</td><td><a href="list.php?sorah=37"> الصافات</a></td><td> الجزء الثالث والعشرون</td><td>446</td><td>181</td><td> مدنيّة </td></tr><tr><td>38</td><td><a href="list.php?sorah=38"> ص</a></td><td> الجزء الثالث والعشرون</td><td>453</td><td>88</td><td> مدنيّة </td></tr><tr><td>39</td><td><a href="list.php?sorah=39"> الزمر</a></td><td> الجزء الثالث والعشرون</td><td>458</td><td>75</td><td> مدنيّة </td></tr><tr><td>40</td><td><a href="list.php?sorah=40"> غافر</a></td><td> الجزء الرابع والعشرون</td><td>467</td><td>85</td><td> مدنيّة </td></tr><tr><td>41</td><td><a href="list.php?sorah=41"> فصلت</a></td><td> الجزء الرابع والعشرون</td><td>477</td><td>54</td><td> مدنيّة </td></tr><tr><td>42</td><td><a href="list.php?sorah=42"> الشورى</a></td><td> الجزء الخامس والعشرون</td><td>483</td><td>53</td><td> مدنيّة </td></tr><tr><td>43</td><td><a href="list.php?sorah=43"> الزخرف</a></td><td> الجزء الخامس والعشرون</td><td>489</td><td>89</td><td> مدنيّة </td></tr><tr><td>44</td><td><a href="list.php?sorah=44"> الدخان</a></td><td> الجزء الخامس والعشرون</td><td>496</td><td>59</td><td> مدنيّة </td></tr><tr><td>45</td><td><a href="list.php?sorah=45"> الجاثية</a></td><td> الجزء الخامس والعشرون</td><td>499</td><td>37</td><td> مدنيّة </td></tr><tr><td>46</td><td><a href="list.php?sorah=46"> الأحقاف</a></td><td> الجزء السادس والعشرون</td><td>502</td><td>35</td><td> مدنيّة </td></tr><tr><td>47</td><td><a href="list.php?sorah=47"> محمد</a></td><td> الجزء السادس والعشرون</td><td>507</td><td>38</td><td> مدنيّة </td></tr><tr><td>48</td><td><a href="list.php?sorah=48"> الفتح</a></td><td> الجزء السادس والعشرون</td><td>511</td><td>29</td><td> مدنيّة </td></tr><tr><td>49</td><td><a href="list.php?sorah=49"> الحجرات</a></td><td> الجزء السادس والعشرون</td><td>515</td><td>18</td><td> مدنيّة </td></tr><tr><td>50</td><td><a href="list.php?sorah=50"> ق</a></td><td> الجزء السادس والعشرون</td><td>518</td><td>45</td><td> مدنيّة </td></tr><tr><td>51</td><td><a href="list.php?sorah=51"> الذاريات</a></td><td> الجزء السادس والعشرون</td><td>520</td><td>60</td><td> مدنيّة </td></tr><tr><td>52</td><td><a href="list.php?sorah=52"> الطور</a></td><td> الجزء السابع والعشرون</td><td>523</td><td>49</td><td> مدنيّة </td></tr><tr><td>53</td><td><a href="list.php?sorah=53"> النجم</a></td><td> الجزء السابع والعشرون</td><td>526</td><td>62</td><td> مدنيّة </td></tr><tr><td>54</td><td><a href="list.php?sorah=54"> القمر</a></td><td> الجزء السابع والعشرون</td><td>528</td><td>55</td><td> مكيّة </td></tr><tr><td>55</td><td><a href="list.php?sorah=55"> الرحمن</a></td><td> الجزء السابع والعشرون</td><td>531</td><td>78</td><td> مدنيّة </td></tr><tr><td>56</td><td><a href="list.php?sorah=56"> الواقعة</a></td><td> الجزء السابع والعشرون</td><td>534</td><td>96</td><td> مكيّة </td></tr><tr><td>57</td><td><a href="list.php?sorah=57"> الحديد</a></td><td> الجزء السابع والعشرون</td><td>537</td><td>29</td><td> مدنيّة </td></tr><tr><td>58</td><td><a href="list.php?sorah=58"> المجادلة</a></td><td> الجزء الثامن والعشرون</td><td>542</td><td>22</td><td> مدنيّة </td></tr><tr><td>59</td><td><a href="list.php?sorah=59"> الحشر</a></td><td> الجزء الثامن والعشرون</td><td>545</td><td>24</td><td> مدنيّة </td></tr><tr><td>60</td><td><a href="list.php?sorah=60"> الممتحنة</a></td><td> الجزء الثامن والعشرون</td><td>549</td><td>13</td><td> مدنيّة </td></tr><tr><td>61</td><td><a href="list.php?sorah=61"> الصف</a></td><td> الجزء الثامن والعشرون</td><td>551</td><td>14</td><td> مدنيّة </td></tr><tr><td>62</td><td><a href="list.php?sorah=62"> الجمعة</a></td><td> الجزء الثامن والعشرون</td><td>553</td><td>11</td><td> مدنيّة </td></tr><tr><td>63</td><td><a href="list.php?sorah=63"> المنافقون</a></td><td> الجزء الثامن والعشرون</td><td>554</td><td>11</td><td> مدنيّة </td></tr><tr><td>64</td><td><a href="list.php?sorah=64"> التغابن</a></td><td> الجزء الثامن والعشرون</td><td>556</td><td>18</td><td> مدنيّة </td></tr><tr><td>65</td><td><a href="list.php?sorah=65"> الطلاق</a></td><td> الجزء الثامن والعشرون</td><td>558</td><td>12</td><td> مدنيّة </td></tr><tr><td>66</td><td><a href="list.php?sorah=66"> التحريم</a></td><td> الجزء الثامن والعشرون</td><td>560</td><td>12</td><td> مدنيّة </td></tr><tr><td>67</td><td><a href="list.php?sorah=67"> الملك</a></td><td> الجزء التاسع والعشرون</td><td>562</td><td>30</td><td> مكيّة </td></tr><tr><td>68</td><td><a href="list.php?sorah=68"> القلم</a></td><td> الجزء التاسع والعشرون</td><td>564</td><td>52</td><td> مكيّة </td></tr><tr><td>69</td><td><a href="list.php?sorah=69"> الحاقة</a></td><td> الجزء التاسع والعشرون</td><td>566</td><td>52</td><td> مكيّة </td></tr><tr><td>70</td><td><a href="list.php?sorah=70"> المعارج</a></td><td> الجزء التاسع والعشرون</td><td>568</td><td>44</td><td> مكيّة </td></tr><tr><td>71</td><td><a href="list.php?sorah=71"> نوح</a></td><td> الجزء التاسع والعشرون</td><td>570</td><td>28</td><td> مكيّة </td></tr><tr><td>72</td><td><a href="list.php?sorah=72"> الجن</a></td><td> الجزء التاسع والعشرون</td><td>572</td><td>28</td><td> مكيّة </td></tr><tr><td>73</td><td><a href="list.php?sorah=73"> المزّمِّل</a></td><td> الجزء التاسع والعشرون</td><td>574</td><td>20</td><td> مكيّة </td></tr><tr><td>74</td><td><a href="list.php?sorah=74"> المدّثر</a></td><td> الجزء التاسع والعشرون</td><td>575</td><td>56</td><td> مكيّة </td></tr><tr><td>75</td><td><a href="list.php?sorah=75"> القيامة</a></td><td> الجزء التاسع والعشرون</td><td>577</td><td>40</td><td> مكيّة </td></tr><tr><td>76</td><td><a href="list.php?sorah=76"> الإنسان</a></td><td> الجزء التاسع والعشرون</td><td>578</td><td>31</td><td> مدنيّة </td></tr><tr><td>77</td><td><a href="list.php?sorah=77"> المرسلات</a></td><td> الجزء التاسع والعشرون</td><td>580</td><td>50</td><td> مكيّة </td></tr><tr><td>78</td><td><a href="list.php?sorah=78"> النبأ</a></td><td> الجزء الثلاثون</td><td>582</td><td>40</td><td> مكيّة </td></tr><tr><td>79</td><td><a href="list.php?sorah=79"> النازعات</a></td><td> الجزء الثلاثون</td><td>583</td><td>46</td><td> مكيّة </td></tr><tr><td>80</td><td><a href="list.php?sorah=80"> عبس</a></td><td> الجزء الثلاثون</td><td>585</td><td>42</td><td> مكيّة </td></tr><tr><td>81</td><td><a href="list.php?sorah=81"> التكوير</a></td><td> الجزء الثلاثون</td><td>586</td><td>29</td><td> مكيّة </td></tr><tr><td>82</td><td><a href="list.php?sorah=82"> الإنفطار</a></td><td> الجزء الثلاثون</td><td>587</td><td>19</td><td> مكيّة </td></tr><tr><td>83</td><td><a href="list.php?sorah=83"> المطففين</a></td><td> الجزء الثلاثون</td><td>587</td><td>36</td><td> مكيّة </td></tr><tr><td>84</td><td><a href="list.php?sorah=84">الانشقاق</a></td><td> الجزء الثلاثون</td><td>589</td><td>25</td><td> مكيّة </td></tr><tr><td>85</td><td><a href="list.php?sorah=85"> البروج</a></td><td> الجزء الثلاثون</td><td>590</td><td>22</td><td> مكيّة </td></tr><tr><td>86</td><td><a href="list.php?sorah=86"> الطارق</a></td><td> الجزء الثلاثون</td><td>591</td><td>17</td><td> مكيّة </td></tr><tr><td>87</td><td><a href="list.php?sorah=87"> الأعلى</a></td><td> الجزء الثلاثون</td><td>591</td><td>19</td><td> مكيّة </td></tr><tr><td>88</td><td><a href="list.php?sorah=88"> الغاشية</a></td><td> الجزء الثلاثون</td><td>592</td><td>26</td><td> مكيّة </td></tr><tr><td>89</td><td><a href="list.php?sorah=89"> الفجر</a></td><td> الجزء الثلاثون</td><td>593</td><td>30</td><td> مكيّة </td></tr><tr><td>90</td><td><a href="list.php?sorah=90"> البلد</a></td><td> الجزء الثلاثون</td><td>594</td><td>20</td><td> مكيّة </td></tr><tr><td>91</td><td><a href="list.php?sorah=91"> الشمس</a></td><td> الجزء الثلاثون</td><td>595</td><td>15</td><td> مكيّة </td></tr><tr><td>92</td><td><a href="list.php?sorah=92"> الليل</a></td><td> الجزء الثلاثون</td><td>595</td><td>21</td><td> مكيّة </td></tr><tr><td>93</td><td><a href="list.php?sorah=93"> الضحى</a></td><td> الجزء الثلاثون</td><td>596</td><td>11</td><td> مكيّة </td></tr><tr><td>94</td><td><a href="list.php?sorah=94"> الشرح</a></td><td> الجزء الثلاثون</td><td>596</td><td>8</td><td> مكيّة </td></tr><tr><td>95</td><td><a href="list.php?sorah=95"> التين</a></td><td> الجزء الثلاثون</td><td>597</td><td>8</td><td> مكيّة </td></tr><tr><td>96</td><td><a href="list.php?sorah=96"> العلق</a></td><td> الجزء الثلاثون</td><td>597</td><td>19</td><td> مكيّة </td></tr><tr><td>97</td><td><a href="list.php?sorah=97"> القدر</a></td><td> الجزء الثلاثون</td><td>598</td><td>5</td><td> مكيّة </td></tr><tr><td>98</td><td><a href="list.php?sorah=98"> البينة</a></td><td> الجزء الثلاثون</td><td>598</td><td>8</td><td> مدنيّة </td></tr><tr><td>99</td><td><a href="list.php?sorah=99"> الزلزلة</a></td><td> الجزء الثلاثون</td><td>599</td><td>8</td><td> مدنيّة </td></tr><tr><td>100</td><td><a href="list.php?sorah=100"> العاديات</a></td><td> الجزء الثلاثون</td><td>599</td><td>11</td><td> مكيّة </td></tr><tr><td>101</td><td><a href="list.php?sorah=101"> القارعة</a></td><td> الجزء الثلاثون</td><td>600</td><td>11</td><td> مكيّة </td></tr><tr><td>102</td><td><a href="list.php?sorah=102"> التكاثر</a></td><td> الجزء الثلاثون</td><td>600</td><td>8</td><td> مكيّة </td></tr><tr><td>103</td><td><a href="list.php?sorah=103"> العصر</a></td><td> الجزء الثلاثون</td><td>601</td><td>3</td><td> مكيّة </td></tr><tr><td>104</td><td><a href="list.php?sorah=104"> الهُمَزَة</a></td><td> الجزء الثلاثون</td><td>601</td><td>9</td><td> مكيّة </td></tr><tr><td>105</td><td><a href="list.php?sorah=105"> الفيل</a></td><td> الجزء الثلاثون</td><td>601</td><td>5</td><td> مكيّة </td></tr><tr><td>106</td><td><a href="list.php?sorah=106"> قريش</a></td><td> الجزء الثلاثون</td><td>602</td><td>4</td><td> مكيّة </td></tr><tr><td>107</td><td><a href="list.php?sorah=107"> الماعون</a></td><td> الجزء الثلاثون</td><td>602</td><td>7</td><td> مكيّة </td></tr><tr><td>108</td><td><a href="list.php?sorah=108"> الكوثر</a></td><td> الجزء الثلاثون</td><td>602</td><td>3</td><td> مكيّة </td></tr><tr><td>109</td><td><a href="list.php?sorah=109"> الكافرون</a></td><td> الجزء الثلاثون</td><td>603</td><td>6</td><td> مكيّة </td></tr><tr><td>110</td><td><a href="list.php?sorah=110"> النصر</a></td><td> الجزء الثلاثون</td><td>603</td><td>3</td><td> مدنيّة </td></tr><tr><td>111</td><td><a href="list.php?sorah=111"> المسد</a></td><td> الجزء الثلاثون</td><td>603</td><td>5</td><td> مكيّة </td></tr><tr><td>112</td><td><a href="list.php?sorah=112"> الإخلاص</a></td><td> الجزء الثلاثون</td><td>604</td><td>4</td><td> مكيّة </td></tr><tr><td>113</td><td><a href="list.php?sorah=113"> الفلق</a></td><td> الجزء الثلاثون</td><td>604</td><td>5</td><td> مدنيّة </td></tr><tr><td>114</td><td><a href="list.php?sorah=114"> الناس</a></td><td> الجزء الثلاثون</td><td>604</td><td>6</td><td> مكيّة </td></tr></tbody></table>



<br><br>


<fb:fbml>
<fb:request-form id="fbreqform"
action="home.php<?php echo ($lang=="en") ? '?lang=en' : '?lang=ar'; ?>" 
method="POST" 
invite="true" 
type="<?php echo ($lang=="en") ? 'Prayer Times' : 'برنامج تفسير القرآن الكريم'; ?>" 
content="<?php echo ($lang=="en") ? 'I suggest you to use this Application to know Prayer Times arround the world.' : 'تستطيع بإذن الله عن طريق هذا البرنامج ،الإستماع و قراءة و تصفح و تفسير وترجمة القرآن الكريم آية آية إلى أكثر من 25 لغة والعديد من القراء والإطلاع على مختلف التفاسير لإبن كثير، الجلالين ، الطبري والقرطبي.'; ?><?php echo htmlentities("<fb:req-choice url=\"http://apps.facebook.com/quran_tafsir/\" label=\"Authorize My Application\"") ?>" > 

<fb:multi-friend-selector id="fbmultifs" max="35" bypass="false" email_invite="false" import_external_friends="true"  showborder="true" actiontext="<?php echo ($lang=="en") ? 'Invite your friends to use this application.' : 'ادعو اصدقاءك لإستخدام هذا البرنامج ... الدال على الخير كفاعله .'; ?>"> 
</fb:request-form>


</fb:fbml>



<br /><br />
<!-- USER COMMENTS -->
<fb:comments xid="tafsir_quran_comments" canpost="true" candelete="false" returnurl="http://www.facebook.com/apps/application.php?id=179229142087638" >
    <fb:title><?php echo ($lang=="en") ? 'Talk about Prayer Times Application' : 'تحدث عن برنامج تفسير القرآن الكريم'; ?></fb:title>
</fb:comments>


<br />
<hr noshade="noshade" style="border-width:0;background-color:highlight;width:505px;height:12px" />


<!-- gift div -->
<div style="text-align: center;  font-size: 22px; color: #3B5998;">
<?php echo ($lang=="en") ? 'This application is a gift from Adhkar Al-Moslem Al-yawmia' : 'هذا البرنامج هدية من أذكار المسلم اليومية '; ?></div>
  <br />
  <div style="text-align: center;">
    <a target="_blank" href="http://www.facebook.com/adhkar.almoslem.alyawmia">
      <img src="http://prayers.jfntechnologie.com/prayers_time/adhkar_moslem_logo.jpg" style="text-align: center;">
    </a>
</div>
</div>
<img src='http://ga.webdigi.co.uk/fbga.php?googlecode=UA-4807913-9&googledomain=facebook.com&pagelink=index.php&pagetitle=index_page'></img>