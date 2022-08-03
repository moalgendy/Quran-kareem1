<?php include'../init.php';
$id = @$_GET['id'];

$sel = mysqli_query($con , "select * from `admin` ");
$m = mysqli_fetch_assoc($sel);

$user_id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-fehres.css">
       <!-- Bootstrap core CSS -->
       <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- <link rel="stylesheet" href="bar.css"> -->
 
        <link rel="stylesheet" href="css/bootstrap-grid.rtl.css"> 
 <link rel="stylesheet" href="css/bootstrap-grid.css">
    <title>fehres</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bar" style="direction: ltr;">
  <div class="container-fluid">
  <a class="navbar-brand logo" href="index.php"> <img src="image/Eldosry.webp" alt="eldosry" style=" height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" video.php?id=<?php echo $user_id ?>">تصفح الفيديوهات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../download/ياسر الدوسري.rar" download="" >تحميل المصحف بضغطة</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<style>
    .bar
    {
        background-color: #cff4d2;
        width: 100%;
        position: fixed;
        z-index: 99999;
        display: flex;
        margin-bottom: 27px;
        position: relative;
    }
</style>





<h4>قم باختيار السورة من فهرس القرآن الكريم</h4>
<table>
<tr>
<th>م</th>
<th>اسم السورة</th>
<th>نوعها</th>
<th>عدد آياتها</th>
<th>الصفحة</th>
</tr>
<tr>
<th>1</th>
<td><a href="1.html"> الفاتحة</a></td>
<td>مكية</td>
<td>7</td>
<td>1</td>
</tr>
<tr>
<th>2</th>
<td><a href="2.html"> البقرة</a></td>
<td>مدنية</td>
<td>286</td>
<td>2</td>
</tr>
<tr>
<th>3</th>
<td><a href="3.html"> آل عمران</a></td>
<td>مدنية</td>
<td>200</td>
<td>50</td>
</tr>
<tr>
<th>4</th>
<td><a href="4.html"> النساء</a></td>
<td>مدنية</td>
<td>176</td>
<td>77</td>
</tr>
<tr>
<th>5</th>
<td><a href="5.html"> المائدة</a></td>
<td>مدنيّة</td>
<td>120</td>
<td>106</td>
</tr>
<tr>
<th>6</th>
<td><a href="6.html"> الأنعام</a></td>
<td>مكية</td>
<td>165</td>
<td>128</td>
</tr>
<th>7</th>
<td><a href="7.html"> الأعراف</a></td>
<td>مكية</td>
<td>206</td>
<td>151</td>
</tr>
<th>8</th>
<td><a href="8.html"> الأنفال</a></td>
<td>مدنية</td>
<td>75</td>
<td>177</td>
</tr>
<th>9</th>
<td><a href="9.html"> التوبة</a></td>
<td>مدنية</td>
<td>129</td>
<td>187</td>
</tr>
<th>10</th>
<td><a href="10.html"> يونس</a></td>
<td>مكية</td>
<td>109</td>
<td>208</td>
</tr>
<th>11</th>
<td><a href="11.html"> هود</a></td>
<td>مكية</td>
<td>123</td>
<td>221</td>
</tr>
<th>12</th>
<td><a href="12.html"> يوسف</a></td>
<td>مكية</td>
<td>111</td>
<td>235</td>
</tr>
<th>13</th>
<td><a href="13.html"> الرعد</a></td>
<td>مدنية</td>
<td>43</td>
<td>249</td>
</tr>
<th>14</th>
<td><a href="14.html"> ابراهيم</a></td>
<td>مكية</td>
<td>52</td>
<td>255</td>
</tr>
<th>15</th>
<td><a href="15.html"> الحجر</a></td>
<td>مكية</td>
<td>99</td>
<td>262</td>
</tr>
<th>16</th>
<td><a href="16.html"> النحل</a></td>
<td>مكية</td>
<td>128</td>
<td>267</td>
</tr>
<th>17</th>
<td><a href="17.html"> الإسراء</a></td>
<td>مكية</td>
<td>111</td>
<td>282</td>
</tr>
<th>18</th>
<td><a href="18.html">الكهف</a></td>
<td>مكية</td>
<td>110</td>
<td>293</td>
</tr>
<th>19</th>
<td><a href="19.html">مريم</a></td>
<td>مكية</td>
<td>98</td>
<td>305</td>
</tr>
<th>20</th>
<td><a href="20.html">طه</a></td>
<td>مكية</td>
<td>135</td>
<td>312</td>
</tr>
<th>21</th>
<td><a href="21.html">الأنبياء</a></td>
<td>مكية</td>
<td>112</td>
<td>322</td>
</tr>
<th>22</th>
<td><a href="22.html">الحج</a></td>
<td>مدنية</td>
<td>78</td>
<td>332</td>
</tr>
<th>23</th>
<td><a href="23.html">المؤمنون</a></td>
<td>مكية</td>
<td>118</td>
<td>342</td>
</tr>
<th>24</th>
<td><a href="24.html">النور</a></td>
<td>مدنية</td>
<td>64</td>
<td>350</td>
</tr>
<th>25</th>
<td><a href="25.html">الفرقان</a></td>
<td>مكية</td>
<td>77</td>
<td>359</td>
</tr>
<th>26</th>
<td><a href="26.html">الشعراء</a></td>
<td>مكية</td>
<td>227</td>
<td>367</td>
</tr>
<th>27</th>
<td><a href="27.html">النمل</a></td>
<td>مكية</td>
<td>93</td>
<td>377</td>
</tr>
<th>28</th>
<td><a href="28.html">القصص</a></td>
<td>مكية</td>
<td>88</td>
<td>385</td>
</tr>
<th>29</th>
<td><a href="29.html">العنكبوت</a></td>
<td>مكية</td>
<td>69</td>
<td>396</td>
</tr>
<th>30</th>
<td><a href="30.html">الروم</a></td>
<td>مكية</td>
<td>60</td>
<td>404</td>
</tr>
<th>31</th>
<td><a href="31.html">لقمان</a></td>
<td>مكية</td>
<td>34</td>
<td>411</td>
</tr>
<th>32</th>
<td><a href="32.html">السجدة</a></td>
<td>مكية</td>
<td>30</td>
<td>415</td>
</tr>
<th>33</th>
<td><a href="33.html">الأحزاب</a></td>
<td>مدنية</td>
<td>73</td>
<td>418</td>
</tr>
<th>34</th>
<td><a href="34.html">سبأ</a></td>
<td>مكية</td>
<td>54</td>
<td>428</td>
</tr>
<th>35</th>
<td><a href="35.html">فاطر</a></td>
<td>مكية</td>
<td>45</td>
<td>434</td>
</tr>
<th>36</th>
<td><a href="36.html">يس</a></td>
<td>مكية</td>
<td>83</td>
<td>440</td>
</tr>
<th>37</th>
<td><a href="37.html">الصافات</a></td>
<td>مكية</td>
<td>182</td>
<td>446</td>
</tr>
<th>38</th>
<td><a href="38.html">سورة ص</a></td>
<td>مكية</td>
<td>88</td>
<td>453</td>
</tr>
<th>39</th>
<td><a href="39.html">الزمر</a></td>
<td>مكية</td>
<td>75</td>
<td>458</td>
</tr>
<th>40</th>
<td><a href="40.html">غافر</a></td>
<td>مكية</td>
<td>85</td>
<td>467</td>
</tr>
<th>41</th>
<td><a href="41.html">فصلت</a></td>
<td>مكية</td>
<td>54</td>
<td>477</td>
</tr>
<th>42</th>
<td><a href="42.html">الشورى</a></td>
<td>مكية</td>
<td>53</td>
<td>483</td>
</tr>
<th>43</th>
<td><a href="43.html">الزخرف</a></td>
<td>مكية</td>
<td>89</td>
<td>489</td>
</tr>
<th>44</th>
<td><a href="44.html">الدخان</a></td>
<td>مكية</td>
<td>59</td>
<td>496</td>
</tr>
<th>45</th>
<td><a href="45.html">الجاثية</a></td>
<td>مكية</td>
<td>37</td>
<td>499</td>
</tr>
<th>46</th>
<td><a href="46.html">الأحقاف</a></td>
<td>مكية</td>
<td>35</td>
<td>502</td>
</tr>
<th>47</th>
<td><a href="47.html">محمد</a></td>
<td>مدنية</td>
<td>38</td>
<td>507</td>
</tr>
<th>48</th>
<td><a href="48.html">الفتح</a></td>
<td>مدنية</td>
<td>29</td>
<td>511</td>
</tr>
<th>49</th>
<td><a href="49.html">الحجرات</a></td>
<td>مدنية</td>
<td>18</td>
<td>515</td>
</tr>
<th>50</th>
<td><a href="50.html">سورة ق</a></td>
<td>مكية</td>
<td>45</td>
<td>518</td>
</tr>
<th>51</th>
<td><a href="51.html">الذاريات</a></td>
<td>مكية</td>
<td>60</td>
<td>520</td>
</tr>
<th>52</th>
<td><a href="52.html">الطور</a></td>
<td>مكية</td>
<td>49</td>
<td>523</td>
</tr>
<th>53</th>
<td><a href="53.html">النجم</a></td>
<td>مكية</td>
<td>62</td>
<td>526</td>
</tr>
<th>54</th>
<td><a href="54.html">القمر</a></td>
<td>مكية</td>
<td>55</td>
<td>528</td>
</tr>
<th>55</th>
<td><a href="55.html">الرحمن</a></td>
<td>مدنية</td>
<td>78</td>
<td>531</td>
</tr>
<th>56</th>
<td><a href="56.html">الواقعة</a></td>
<td>مكية</td>
<td>96</td>
<td>534</td>
</tr>
<th>57</th>
<td><a href="57.html">الحديد</a></td>
<td>مدنية</td>
<td>29</td>
<td>537</td>
</tr>
<th>58</th>
<td><a href="58.html">المجادلة</a></td>
<td>مدنية</td>
<td>22</td>
<td>542</td>
</tr>
<th>59</th>
<td><a href="59.html">الحشر</a></td>
<td>مدنية</td>
<td>24</td>
<td>545</td>
</tr>
<th>60</th>
<td><a href="60.html">الممتحنة</a></td>
<td>مدنية</td>
<td>13</td>
<td>549</td>
</tr>
<th>61</th>
<td><a href="61.html">الصف</a></td>
<td>مدنية</td>
<td>14</td>
<td>551</td>
</tr>
<th>62</th>
<td><a href="62.html">الجمعة</a></td>
<td>مدنية</td>
<td>11</td>
<td>553</td>
</tr>
<th>63</th>
<td><a href="63.html">المنافقون</a></td>
<td>مدنية</td>
<td>11</td>
<td>554</td>
</tr>
<th>64</th>
<td><a href="64.html">التغابن</a></td>
<td>مدنية</td>
<td>18</td>
<td>556</td>
</tr>
<th>65</th>
<td><a href="65.html">الطلاق</a></td>
<td>مدنية</td>
<td>12</td>
<td>558</td>
</tr>
<th>66</th>
<td><a href="66.html">التحريم</a></td>
<td>مدنية</td>
<td>12</td>
<td>560</td>
</tr>
<th>67</th>
<td><a href="67.html">الملك</a></td>
<td>مكية</td>
<td>30</td>
<td>562</td>
</tr>
<th>68</th>
<td><a href="68.html">القلم</a></td>
<td>مكية</td>
<td>52</td>
<td>564</td>
</tr>
<th>69</th>
<td><a href="69.html">الحاقة</a></td>
<td>مكية</td>
<td>52</td>
<td>566</td>
</tr>
<th>70</th>
<td><a href="70.html">المعارج</a></td>
<td>مكية</td>
<td>44</td>
<td>568</td>
</tr>
<th>71</th>
<td><a href="71.html">نوح</a></td>
<td>مكية</td>
<td>28</td>
<td>570</td>
</tr>
<th>72</th>
<td><a href="72.html">الجن</a></td>
<td>مكية</td>
<td>28</td>
<td>572</td>
</tr>
<th>73</th>
<td><a href="73.html">المزمل</a></td>
<td>مكية</td>
<td>20</td>
<td>574</td>
</tr>
<th>74</th>
<td><a href="74.html">المدثر</a></td>
<td>مكية</td>
<td>56</td>
<td>575</td>
</tr>
<th>75</th>
<td><a href="75.html">القيامة</a></td>
<td>مكية</td>
<td>40</td>
<td>577</td>
</tr>
<th>76</th>
<td><a href="76.html">الإنسان</a></td>
<td>مدنية</td>
<td>31</td>
<td>578</td>
</tr>
<th>77</th>
<td><a href="77.html">المرسلات</a></td>
<td>مكية</td>
<td>50</td>
<td>580</td>
</tr>
<th>78</th>
<td><a href="78.html">النبأ</a></td>
<td>مكية</td>
<td>40</td>
<td>582</td>
</tr>
<th>79</th>
<td><a href="79.html">النازعات</a></td>
<td>مكية</td>
<td>46</td>
<td>583</td>
</tr>
<th>80</th>
<td><a href="80.html">عبس</a></td>
<td>مكية</td>
<td>42</td>
<td>585</td>
</tr>
<th>81</th>
<td><a href="81.html">التكوير</a></td>
<td>مكية</td>
<td>29</td>
<td>586</td>
</tr>
<th>82</th>
<td><a href="82.html">الإنفطار</a></td>
<td>مكية</td>
<td>19</td>
<td>587</td>
</tr>
<th>83</th>
<td><a href="83.html">المطففين</a></td>
<td>مكية</td>
<td>36</td>
<td>587</td>
</tr>
<th>84</th>
<td><a href="84.html">الانشقاق</a></td>
<td>مكية</td>
<td>25</td>
<td>589</td>
</tr>
<th>85</th>
<td><a href="85.html">البروج</a></td>
<td>مكية</td>
<td>22</td>
<td>590</td>
</tr>
<th>86</th>
<td><a href="86.html">الطارق</a></td>
<td>مكية</td>
<td>17</td>
<td>591</td>
</tr>
<th>87</th>
<td><a href="87.html">الأعلى</a></td>
<td>مكية</td>
<td>19</td>
<td>591</td>
</tr>
<th>88</th>
<td><a href="88.html">الغاشية</a></td>
<td>مكية</td>
<td>26</td>
<td>592</td>
</tr>
<th>89</th>
<td><a href="89.html">الفجر</a></td>
<td>مكية</td>
<td>30</td>
<td>593</td>
</tr>
<th>90</th>
<td><a href="90.html">البلد</a></td>
<td>مكية</td>
<td>20</td>
<td>594</td>
</tr>
<th>91</th>
<td><a href="91.html">الشمس</a></td>
<td>مكية</td>
<td>15</td>
<td>595</td>
</tr>
<th>92</th>
<td><a href="92.html">الليل</a></td>
<td>مكية</td>
<td>21</td>
<td>595</td>
</tr>
<th>93</th>
<td><a href="93.html">الضحى</a></td>
<td>مكية</td>
<td>11</td>
<td>596</td>
</tr>
<th>94</th>
<td><a href="94.html">الشرح</a></td>
<td>مكية</td>
<td>8</td>
<td>596</td>
</tr>
<th>95</th>
<td><a href="95.html">التين</a></td>
<td>مكية</td>
<td>8</td>
<td>597</td>
</tr>
<th>96</th>
<td><a href="96.html">العلق</a></td>
<td>مكية</td>
<td>19</td>
<td>597</td>
</tr>
<th>97</th>
<td><a href="97.html">القدر</a></td>
<td>مكية</td>
<td>5</td>
<td>598</td>
</tr>
<th>98</th>
<td><a href="98.html">البينة</a></td>
<td>مدنية</td>
<td>8</td>
<td>598</td>
</tr>
<th>99</th>
<td><a href="99.html">الزلزلة</a></td>
<td>مدنية</td>
<td>8</td>
<td>599</td>
</tr>
<th>100</th>
<td><a href="100.html">العاديات</a></td>
<td>مكية</td>
<td>11</td>
<td>599</td>
</tr>
<th>101</th>
<td><a href="101.html">القارعة</a></td>
<td>مكية</td>
<td>11</td>
<td>600</td>
</tr>
<th>102</th>
<td><a href="102.html">التكاثر</a></td>
<td>مكية</td>
<td>8</td>
<td>600</td>
</tr>
<th>103</th>
<td><a href="103.html">العصر</a></td>
<td>مكية</td>
<td>3</td>
<td>601</td>
</tr>
<th>104</th>
<td><a href="104.html">الهمزة</a></td>
<td>مكية</td>
<td>9</td>
<td>601</td>
</tr>
<th>105</th>
<td><a href="105.html">الفيل</a></td>
<td>مكية</td>
<td>5</td>
<td>601</td>
</tr>
<th>106</th>
<td><a href="106.html">قريش</a></td>
<td>مكية</td>
<td>4</td>
<td>602</td>
</tr>
<th>107</th>
<td><a href="107.html">الماعون</a></td>
<td>مكية</td>
<td>7</td>
<td>602</td>
</tr>
<th>108</th>
<td><a href="108.html">الكوثر</a></td>
<td>مكية</td>
<td>3</td>
<td>602</td>
</tr>
<th>109</th>
<td><a href="109.html">الكافرون</a></td>
<td>مكية</td>
<td>6</td>
<td>603</td>
</tr>
<th>110</th>
<td><a href="110.html">النصر</a></td>
<td>مدنية</td>
<td>3</td>
<td>603</td>
</tr>
<th>111</th>
<td><a href="111.html">المسد</a></td>
<td>مكية</td>
<td>5</td>
<td>603</td>
</tr>
<th>112</th>
<td><a href="112.html">الإخلاص</a></td>
<td>مكية</td>
<td>4</td>
<td>604</td>
</tr>
<th>113</th>
<td><a href="113.html">الفلق</a></td>
<td>مدنية</td>
<td>5</td>
<td>604</td>
</tr>
<th>114</th>
<td><a href="114.html">الناس</a></td>
<td>مدنية</td>
<td>6</td>
<td>604</td>
</tr>
</table>

<style>
    body
    {
    font-family: changa,sans-serif;
    }
a{
    transition: all .3s ease 0s;
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}


a, a:focus, a:hover {
    text-decoration: none;
    outline: 0;
}



h4 {
    font-size: 18px;
    font-family: changa,sans-serif;
    color: #222;
    line-height: 1.5em!important;
    margin-bottom: 0;
    margin-top: 0;
    font-weight: 600;
    display: flex;
    justify-content: center;
    align-items: center;
    
    /* margin-block-start: 1.33em; */
    margin-block-end: 1.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
</style>


    
</body>
</html>
