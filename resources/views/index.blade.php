@extends('layouts.app')

@section('content')
<div class="wrapper">
  <div class="postAd-myAcc">
    <input type="button" class="postAd-myAcc-btn" id="postAd-btn" value="Post Ad ►" onclick="location=''" />
    <input type="button" class="postAd-myAcc-btn" id="myAcc-btn" value="My Account ►" onclick="location=''" />
  </div>
  <div class="filter">
    <div class="choiceLabel" id="categoryChoiceLabel">
        <span class="choiceLabelText">Category ▼</span>
    </div>
    <div class="choiceMenu" id="categoryChoiceMenu">
            <div class="uiMenuBlock">
              <div id="uiMenuBar">
                <input type="text" style="position:relative; top: 10px; left: 10px; color: #000;">
                <a href="#" class="choiceMenuClose" style="text-decoration: none; color: #7d7d7d; font-weight: 700;">X</a>
              </div>
              <div class="uiMenuGroup">
                <div class="uiMenuItem">Tools</div>
                <div class="uiMenuItem">Antiques and Artworks</div>
                <div class="uiMenuItem">Audio</div>
                <div class="uiMenuItem">Cars</div>
                <div class="uiMenuItem">Cars | Equipment</div>
                <div class="uiMenuItem">Baby Accessories</div>
                <div class="uiMenuItem">Appliances</div>
                <div class="uiMenuItem">Bicycles</div>
                <div class="uiMenuItem">Magazines and Comics</div>
                <div class="uiMenuItem">Yard and Garden</div>
                <div class="uiMenuItem">Electronics</div>
                <div class="uiMenuItem">Photo</div>
                <div class="uiMenuItem">Construction</div>
                <div class="uiMenuItem">Toys</div>
                <div class="uiMenuItem">Industrial Equipment</div>
                <div class="uiMenuItem">Trucks</div>
                </div>

                <div class="uiMenuGroup" id="uiMenuGroup1">
                <div class="uiMenuItem">Books</div>
                <div class="uiMenuItem">Computers</div>
                <div class="uiMenuItem">Games</div>
                <div class="uiMenuItem">Pets</div>
                <div class="uiMenuItem">Hunting and Fishing</div>
                <div class="uiMenuItem">Mobile Phones</div>
                <div class="uiMenuItem">Motorcycles</div>
                <div class="uiMenuItem">Motorcycles | Equipment</div>
                <div class="uiMenuItem">Music and Instruments</div>
                <div class="uiMenuItem">Jewelry and Watches</div>
                <div class="uiMenuItem">Furniture</div>
                <div class="uiMenuItem">Facial and Body care</div>
                <div class="uiMenuItem">Real Estate</div>
                <div class="uiMenuItem">Footwear | Men</div>
                <div class="uiMenuItem">Footwear | Women</div>
                <div class="uiMenuItem">Footwear | Kids</div>
                </div>

                <div class="uiMenuGroup" id="uiMenuGroup2">
                <div class="uiMenuItem">Clothes | Men</div>
                <div class="uiMenuItem">Clothes | Women</div>
                <div class="uiMenuItem">Clothes | Kids</div>
                <div class="uiMenuItem">Craft</div>
                <div class="uiMenuItem">Agriculture</div>
                <div class="uiMenuItem">Sport</div>
                <div class="uiMenuItem">School Supplies</div>
                <div class="uiMenuItem">Bags and Wallets</div>
                <div class="uiMenuItem">TV and Video</div>
                <div class="uiMenuItem">Catering</div>
                <div class="uiMenuItem">Arrangemenet of the House</div>
                <div class="uiMenuItem">Other</div>
                </div>
            </div>
    </div>

<div class="choiceLabel" id="countryChoiceLabel">
        <span class="choiceLabelText">Country/City ▼</span>
       <div class="choiceMenu" id="countryChoiceMenu">
            <div class="secondMenuBlock">
              <div id="uiMenuBar">
                <input type="text" style="position:relative; top: 10px; left: 10px; color: #000;">
                <a href="#" class="choiceMenuClose" style="text-decoration: none; color: #7d7d7d; font-weight: 700;">X</a>
              </div>
              <div class="uiMenuGroup">
                <div class="uiMenuItem" id="uiMenuItemUs">United States
                   <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">New York</div>
                     <div class="uiSubMenuItem">Los Angeles</div>
                     <div class="uiSubMenuItem">Chicago</div>
                     <div class="uiSubMenuItem">Houston</div>
                     <div class="uiSubMenuItem">Phoenix</div>
                     <div class="uiSubMenuItem">Philadelphia</div>
                     <div class="uiSubMenuItem">San Antonio</div>
                     <div class="uiSubMenuItem">San Diego</div>
                     <div class="uiSubMenuItem">Dallas</div>
                     <div class="uiSubMenuItem">San Jose</div>
                     <div class="uiSubMenuItem">Austin</div>
                     <div class="uiSubMenuItem">Jacksonville</div>
                     <div class="uiSubMenuItem">Fort Worth</div>
                     <div class="uiSubMenuItem">Columbus</div>
                     <div class="uiSubMenuItem">San Francisco</div>
                     <div class="uiSubMenuItem">Charlotte</div>
                     <div class="uiSubMenuItem">Indianapolis</div>
                     <div class="uiSubMenuItem">Seattle</div>
                     <div class="uiSubMenuItem">Denver</div>
                     <div class="uiSubMenuItem">Washington</div>
                     <div class="uiSubMenuItem">Boston</div>
                     <div class="uiSubMenuItem">Detroit</div>
                     <div class="uiSubMenuItem">Nashville</div>
                     <div class="uiSubMenuItem">Portland</div>
                     <div class="uiSubMenuItem">Memphis</div>
                     <div class="uiSubMenuItem">Oklahoma City</div>
                     <div class="uiSubMenuItem">Las Vegas</div>
                     <div class="uiSubMenuItem">Louisville</div>
                     <div class="uiSubMenuItem">Milwaukee</div>
                     <div class="uiSubMenuItem">Sacramento</div>
                     <div class="uiSubMenuItem">Atlanta</div>
                     <div class="uiSubMenuItem">Kansas City</div>
                     <div class="uiSubMenuItem">Miami</div>
                     <div class="uiSubMenuItem">Long Beach</div>
                     <div class="uiSubMenuItem">Virginia Beach</div>
                     <div class="uiSubMenuItem">Oakland</div>
                     <div class="uiSubMenuItem">Minneapolis</div>
                     <div class="uiSubMenuItem">New Orleans</div>
                     <div class="uiSubMenuItem">Cleveland</div>
                     <div class="uiSubMenuItem">Stockton</div>
                     <div class="uiSubMenuItem">Henderson</div>
                     <div class="uiSubMenuItem">Saint Paul</div>
                     <div class="uiSubMenuItem">St. Louis</div>
                     <div class="uiSubMenuItem">Pittsburgh</div>
                     <div class="uiSubMenuItem">Lincoln</div>
                     <div class="uiSubMenuItem">Orlando</div>
                     <div class="uiSubMenuItem">Irvine</div>
                     <div class="uiSubMenuItem">Jersey City</div>
                     <div class="uiSubMenuItem">San Bernardino</div>
                     <div class="uiSubMenuItem">Ontario</div>
                     <div class="uiSubMenuItem">Hampton</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemChina">China
                 <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Hong Kong</div>
                     <div class="uiSubMenuItem">Macau</div>
                     <div class="uiSubMenuItem">Beijing</div>
                     <div class="uiSubMenuItem">Chongqing</div>
                     <div class="uiSubMenuItem">Shanghai</div>
                     <div class="uiSubMenuItem">Tianjin</div>
                     <div class="uiSubMenuItem">Anqing</div>
                     <div class="uiSubMenuItem">Bengbu</div>
                     <div class="uiSubMenuItem">Bozhou</div>
                     <div class="uiSubMenuItem">Chaohu</div>
                     <div class="uiSubMenuItem">Chizhou</div>
                     <div class="uiSubMenuItem">Chuzhou</div>
                     <div class="uiSubMenuItem">Fuyang</div>
                     <div class="uiSubMenuItem">Hefei</div>
                     <div class="uiSubMenuItem">Huaibei</div>
                     <div class="uiSubMenuItem">Huainan</div>
                     <div class="uiSubMenuItem">Huangshan</div>
                     <div class="uiSubMenuItem">Jieshou</div>
                     <div class="uiSubMenuItem">Lu'an</div>
                     <div class="uiSubMenuItem">Ma'anshan</div>
                     <div class="uiSubMenuItem">Mingguang</div>
                     <div class="uiSubMenuItem">Ningguo</div>
                     <div class="uiSubMenuItem">Qianshan</div>
                     <div class="uiSubMenuItem">Suzhou</div>
                     <div class="uiSubMenuItem">Tianchang</div>
                     <div class="uiSubMenuItem">Tongcheng</div>
                     <div class="uiSubMenuItem">Tongling</div>
                     <div class="uiSubMenuItem">Wuhu</div>
                     <div class="uiSubMenuItem">Xuancheng</div>
                     <div class="uiSubMenuItem">Fu'an</div>
                     <div class="uiSubMenuItem">Fuding</div>
                     <div class="uiSubMenuItem">Fuqing</div>
                     <div class="uiSubMenuItem">Fuzhou</div>
                     <div class="uiSubMenuItem">Jian'ou</div>
                     <div class="uiSubMenuItem">Jinjiang</div>
                     <div class="uiSubMenuItem">Longhai</div>
                     <div class="uiSubMenuItem">Longyan</div>
                     <div class="uiSubMenuItem">Nan'an</div>
                     <div class="uiSubMenuItem">Nanping</div>
                     <div class="uiSubMenuItem">Ningde</div>
                     <div class="uiSubMenuItem">Putian</div>
                     <div class="uiSubMenuItem">Foshan</div>
                     <div class="uiSubMenuItem">Gaozhou</div>
                     <div class="uiSubMenuItem">Heshan</div>
                     <div class="uiSubMenuItem">Lechang</div>
                     <div class="uiSubMenuItem">Qingyuan</div>
                     <div class="uiSubMenuItem">Shantou</div>
                     <div class="uiSubMenuItem">Sihui</div>
                     <div class="uiSubMenuItem">Yangchun</div>
                     <div class="uiSubMenuItem">Yunfu</div>
                     <div class="uiSubMenuItem">Zhanjiang</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemJapan">Japan
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Nagoya</div>
                     <div class="uiSubMenuItem">Ichinomiya</div>
                     <div class="uiSubMenuItem">Toyota</div>
                     <div class="uiSubMenuItem">Nishio</div>
                     <div class="uiSubMenuItem">Kōnan</div>
                     <div class="uiSubMenuItem">Ōbu</div>
                     <div class="uiSubMenuItem">Owariasahi</div>
                     <div class="uiSubMenuItem">Takahama</div>
                     <div class="uiSubMenuItem">Kitanagoya</div>
                     <div class="uiSubMenuItem">Yatomi</div>
                     <div class="uiSubMenuItem">Miyoshi</div>
                     <div class="uiSubMenuItem">Nagakute</div>
                     <div class="uiSubMenuItem">Akita</div>
                     <div class="uiSubMenuItem">Katagami</div>
                     <div class="uiSubMenuItem">Kitaakita</div>
                     <div class="uiSubMenuItem">Yuzawa</div>
                     <div class="uiSubMenuItem">Hachinohe</div>
                     <div class="uiSubMenuItem">Misawa</div>
                     <div class="uiSubMenuItem">Aomori</div>
                     <div class="uiSubMenuItem">Chiba</div>
                     <div class="uiSubMenuItem">Ichikawa</div>
                     <div class="uiSubMenuItem">Funabashi</div>
                     <div class="uiSubMenuItem">Kisarazu</div>
                     <div class="uiSubMenuItem">Sakura</div>
                     <div class="uiSubMenuItem">Narashino</div>
                     <div class="uiSubMenuItem">Kashiwa</div>
                     <div class="uiSubMenuItem">Katsuura</div>
                     <div class="uiSubMenuItem">Ichihara</div>
                     <div class="uiSubMenuItem">Matsuyama</div>
                     <div class="uiSubMenuItem">Fukui</div>
                     <div class="uiSubMenuItem">Obama</div>
                     <div class="uiSubMenuItem">Kurume</div>
                     <div class="uiSubMenuItem">Ōmuta</div>
                     <div class="uiSubMenuItem">Kitakyushu</div>
                     <div class="uiSubMenuItem">Kasuga</div>
                     <div class="uiSubMenuItem">Iizuka</div>
                     <div class="uiSubMenuItem">Aizuwakamatsu</div>
                     <div class="uiSubMenuItem">Fukushima</div>
                     <div class="uiSubMenuItem">Kōriyama</div>
                     <div class="uiSubMenuItem">Iwaki</div>
                     <div class="uiSubMenuItem">Gifu</div>
                     <div class="uiSubMenuItem">Ōgaki</div>
                     <div class="uiSubMenuItem">Kakamigahara</div>
                     <div class="uiSubMenuItem">Maebashi</div>
                     <div class="uiSubMenuItem">Takasaki</div>
                     <div class="uiSubMenuItem">Isesaki</div>
                     <div class="uiSubMenuItem">Ōta</div>
                     <div class="uiSubMenuItem">Hiroshima</div>
                     <div class="uiSubMenuItem">Kure</div>
                     <div class="uiSubMenuItem">Fukuyama</div>
                     <div class="uiSubMenuItem">Sapporo</div>
                     <div class="uiSubMenuItem">Hakodate</div>
                     <div class="uiSubMenuItem">Asahikawa</div>
                     <div class="uiSubMenuItem">Kobe</div>
                     <div class="uiSubMenuItem">Himeji</div>
                     <div class="uiSubMenuItem">Amagasaki</div>
                     <div class="uiSubMenuItem">Akashi</div>
                     <div class="uiSubMenuItem">Nishinomiya</div>
                     <div class="uiSubMenuItem">Kakogawa</div>
                     <div class="uiSubMenuItem">Takarazuka</div>
                     <div class="uiSubMenuItem">Mito</div>
                     <div class="uiSubMenuItem">Tsukuba</div>
                     <div class="uiSubMenuItem">Kanazawa</div>
                     <div class="uiSubMenuItem">Marioka</div>
                     <div class="uiSubMenuItem">Kagoshima</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemGermany">Germany
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Berlin</div>
                     <div class="uiSubMenuItem">Hamburg</div>
                     <div class="uiSubMenuItem">Munich</div>
                     <div class="uiSubMenuItem">Cologne</div>
                     <div class="uiSubMenuItem">Frankfurt am Main</div>
                     <div class="uiSubMenuItem">Stuttgart</div>
                     <div class="uiSubMenuItem">Düsseldorf</div>
                     <div class="uiSubMenuItem">Dortmund</div>
                     <div class="uiSubMenuItem">Essen</div>
                     <div class="uiSubMenuItem">Leipzig</div>
                     <div class="uiSubMenuItem">Bremen</div>
                     <div class="uiSubMenuItem">Dresden</div>
                     <div class="uiSubMenuItem">Hanover</div>
                     <div class="uiSubMenuItem">Nuremberg</div>
                     <div class="uiSubMenuItem">Duisburg</div>
                     <div class="uiSubMenuItem">Bochum</div>
                     <div class="uiSubMenuItem">Wuppertal</div>
                     <div class="uiSubMenuItem">Bielefeld</div>
                     <div class="uiSubMenuItem">Bonn</div>
                     <div class="uiSubMenuItem">Münster</div>
                     <div class="uiSubMenuItem">Karlsruhe</div>
                     <div class="uiSubMenuItem">Mannheim</div>
                     <div class="uiSubMenuItem">Augsburg</div>
                     <div class="uiSubMenuItem">Wiesbaden</div>
                     <div class="uiSubMenuItem">Gelsenkirchen</div>
                     <div class="uiSubMenuItem">Mönchengladbach</div>
                     <div class="uiSubMenuItem">Braunschweig</div>
                     <div class="uiSubMenuItem">Chemnitz</div>
                     <div class="uiSubMenuItem">Kiel</div>
                     <div class="uiSubMenuItem">Aachen</div>
                     <div class="uiSubMenuItem">Halle (Saale)</div>
                     <div class="uiSubMenuItem">Magdeburg</div>
                     <div class="uiSubMenuItem">Freiburg im Breisgau</div>
                     <div class="uiSubMenuItem">Krefeld</div>
                     <div class="uiSubMenuItem">Lübeck</div>
                     <div class="uiSubMenuItem">Oberhausen</div>
                     <div class="uiSubMenuItem">Erfurt</div>
                     <div class="uiSubMenuItem">Mainz</div>
                     <div class="uiSubMenuItem">Rostock</div>
                     <div class="uiSubMenuItem">Kassel</div>
                     <div class="uiSubMenuItem">Hagen</div>
                     <div class="uiSubMenuItem">Hamm</div>
                     <div class="uiSubMenuItem">Saarbrücken</div>
                     <div class="uiSubMenuItem">Mülheim an der Ruhr</div>
                     <div class="uiSubMenuItem">Potsdam</div>
                     <div class="uiSubMenuItem">Ludwigshafen am Rhein</div>
                     <div class="uiSubMenuItem">Oldenburg</div>
                     <div class="uiSubMenuItem">Leverkusen</div>
                     <div class="uiSubMenuItem">Osnabrück</div>
                     <div class="uiSubMenuItem">Solingen</div>
                     <div class="uiSubMenuItem">Heidelberg</div>
                     <div class="uiSubMenuItem">Herne</div>
                     <div class="uiSubMenuItem">Neuss</div>
                     <div class="uiSubMenuItem">Paderborn</div>
                     <div class="uiSubMenuItem">Wolfsburg</div>
                     <div class="uiSubMenuItem">Koblenz</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemUK">United Kingdom
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Aberdeen</div>
                     <div class="uiSubMenuItem">Armagh</div>
                     <div class="uiSubMenuItem">Bangor</div>
                     <div class="uiSubMenuItem">Bath</div>
                     <div class="uiSubMenuItem">Belfast</div>
                     <div class="uiSubMenuItem">Birmingham</div>
                     <div class="uiSubMenuItem">Bradford</div>
                     <div class="uiSubMenuItem">Brighton & Hove</div>
                     <div class="uiSubMenuItem">Bristol</div>
                     <div class="uiSubMenuItem">Cambridge</div>
                     <div class="uiSubMenuItem">Canterbury</div>
                     <div class="uiSubMenuItem">Cardiff</div>
                     <div class="uiSubMenuItem">Carlisle</div>
                     <div class="uiSubMenuItem">Chelmsford</div>
                     <div class="uiSubMenuItem">Chester</div>
                     <div class="uiSubMenuItem">Chichester</div>
                     <div class="uiSubMenuItem">Coventry</div>
                     <div class="uiSubMenuItem">Derby</div>
                     <div class="uiSubMenuItem">Derry</div>
                     <div class="uiSubMenuItem">Dundee</div>
                     <div class="uiSubMenuItem">Durham</div>
                     <div class="uiSubMenuItem">Edinburgh</div>
                     <div class="uiSubMenuItem">Ely</div>
                     <div class="uiSubMenuItem">Exeter</div>
                     <div class="uiSubMenuItem">Glasgow</div>
                     <div class="uiSubMenuItem">Gloucester</div>
                     <div class="uiSubMenuItem">Hereford</div>
                     <div class="uiSubMenuItem">Inverness</div>
                     <div class="uiSubMenuItem">Kingston upon Hull</div>
                     <div class="uiSubMenuItem">Lancaster</div>
                     <div class="uiSubMenuItem">Leeds</div>
                     <div class="uiSubMenuItem">Leicester</div>
                     <div class="uiSubMenuItem">Lichfield</div>
                     <div class="uiSubMenuItem">Lincoln</div>
                     <div class="uiSubMenuItem">Lisburn</div>
                     <div class="uiSubMenuItem">Liverpool</div>
                     <div class="uiSubMenuItem">London</div>
                     <div class="uiSubMenuItem">Manchester</div>
                     <div class="uiSubMenuItem">Newcastle upon Tyne</div>
                     <div class="uiSubMenuItem">Newport</div>
                     <div class="uiSubMenuItem">Newry</div>
                     <div class="uiSubMenuItem">Norwich</div>
                     <div class="uiSubMenuItem">Nottingham</div>
                     <div class="uiSubMenuItem">Oxford</div>
                     <div class="uiSubMenuItem">Perth</div>
                     <div class="uiSubMenuItem">Peterborough</div>
                     <div class="uiSubMenuItem">Plymouth</div>
                     <div class="uiSubMenuItem">Portsmouth</div>
                     <div class="uiSubMenuItem">Preston</div>
                     <div class="uiSubMenuItem">St Albans</div>
                     <div class="uiSubMenuItem">Salford</div>
                     <div class="uiSubMenuItem">Sheffield</div>
                     <div class="uiSubMenuItem">Southampton</div>
                     <div class="uiSubMenuItem">Stoke-on-Trent</div>
                     <div class="uiSubMenuItem">Sunderland</div>
                     <div class="uiSubMenuItem">Swansea</div>
                     <div class="uiSubMenuItem">Wakefiel</div>
                     <div class="uiSubMenuItem">Wells</div>
                     <div class="uiSubMenuItem">Westminster</div>
                     <div class="uiSubMenuItem">Winchester</div>
                     <div class="uiSubMenuItem">Wolverhampton</div>
                     <div class="uiSubMenuItem">Worcester</div>
                     <div class="uiSubMenuItem">York</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemFr">France
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Paris</div>
                     <div class="uiSubMenuItem">Marseille</div>
                     <div class="uiSubMenuItem">Lyon</div>
                     <div class="uiSubMenuItem">Toulouse</div>
                     <div class="uiSubMenuItem">Nice</div>
                     <div class="uiSubMenuItem">Nantes</div>
                     <div class="uiSubMenuItem">Strasbourg</div>
                     <div class="uiSubMenuItem">Montpellier</div>
                     <div class="uiSubMenuItem">Bordeaux</div>
                     <div class="uiSubMenuItem">Lille</div>
                     <div class="uiSubMenuItem">Rennes</div>
                     <div class="uiSubMenuItem">Reims</div>
                     <div class="uiSubMenuItem">Le Havre</div>
                     <div class="uiSubMenuItem">Saint-Étienne</div>
                     <div class="uiSubMenuItem">Toulon</div>
                     <div class="uiSubMenuItem">Grenoble</div>
                     <div class="uiSubMenuItem">Dijon</div>
                     <div class="uiSubMenuItem">Nîmes</div>
                     <div class="uiSubMenuItem">Angers</div>
                     <div class="uiSubMenuItem">Villeurbanne</div>
                     <div class="uiSubMenuItem">Le Mans</div>
                     <div class="uiSubMenuItem">Saint-Denis</div>
                     <div class="uiSubMenuItem">Aix-en-Provence</div>
                     <div class="uiSubMenuItem">Clermont-Ferrand</div>
                     <div class="uiSubMenuItem">Brest</div>
                     <div class="uiSubMenuItem">Limoges</div>
                     <div class="uiSubMenuItem">Tours</div>
                     <div class="uiSubMenuItem">Amiens</div>
                     <div class="uiSubMenuItem">Perpignan</div>
                     <div class="uiSubMenuItem">Metz</div>
                     <div class="uiSubMenuItem">Besançon</div>
                     <div class="uiSubMenuItem">Boulogne-Billancourt</div>
                     <div class="uiSubMenuItem">Orléans</div>
                     <div class="uiSubMenuItem">Mulhouse</div>
                     <div class="uiSubMenuItem">Rouen</div>
                     <div class="uiSubMenuItem">Saint-Denis</div>
                     <div class="uiSubMenuItem">Caen</div>
                     <div class="uiSubMenuItem">Argenteuil</div>
                     <div class="uiSubMenuItem">Saint-Paul</div>
                     <div class="uiSubMenuItem">Montreuil</div>
                     <div class="uiSubMenuItem">Nancy</div>
                     <div class="uiSubMenuItem">Roubaix</div>
                     <div class="uiSubMenuItem">Tourcoing</div>
                     <div class="uiSubMenuItem">Nanterre</div>
                     <div class="uiSubMenuItem">Avignon</div>
                     <div class="uiSubMenuItem">Vitry-sur-Seine</div>
                     <div class="uiSubMenuItem">Créteil</div>
                     <div class="uiSubMenuItem">Dunkirk</div>
                     <div class="uiSubMenuItem">Poitiers</div>
                     <div class="uiSubMenuItem">Asnières-sur-Seine</div>
                     <div class="uiSubMenuItem">Courbevoie</div>
                     <div class="uiSubMenuItem">Versailles</div>
                     <div class="uiSubMenuItem">Colombes</div>
                     <div class="uiSubMenuItem">Fort-de-France</div>
                     <div class="uiSubMenuItem">Aulnay-sous-Bois</div>
                     <div class="uiSubMenuItem">Saint-Pierre</div>
                     <div class="uiSubMenuItem">Rueil-Malmaison</div>
                     <div class="uiSubMenuItem">Pau</div>
                     <div class="uiSubMenuItem">Aubervilliers</div>
                     <div class="uiSubMenuItem">Le Tampon</div>
                     <div class="uiSubMenuItem">Champigny-sur-Marne</div>
                     <div class="uiSubMenuItem">Antibes</div>
                     <div class="uiSubMenuItem">Béziers</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemIndia">India
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Mumbai</div>
                     <div class="uiSubMenuItem">Delhi</div>
                     <div class="uiSubMenuItem">Bangalore</div>
                     <div class="uiSubMenuItem">Hyderabad</div>
                     <div class="uiSubMenuItem">Ahmedabad</div>
                     <div class="uiSubMenuItem">Chennai</div>
                     <div class="uiSubMenuItem">Kolkata</div>
                     <div class="uiSubMenuItem">Surat</div>
                     <div class="uiSubMenuItem">Pune</div>
                     <div class="uiSubMenuItem">Jaipur</div>
                     <div class="uiSubMenuItem">Lucknow</div>
                     <div class="uiSubMenuItem">Kanpur</div>
                     <div class="uiSubMenuItem">Nagpur</div>
                     <div class="uiSubMenuItem">Indore</div>
                     <div class="uiSubMenuItem">Thane</div>
                     <div class="uiSubMenuItem">Bhopal</div>
                     <div class="uiSubMenuItem">Visakhapatnam</div>
                     <div class="uiSubMenuItem">Pimpri-Chinchwad</div>
                     <div class="uiSubMenuItem">Patna</div>
                     <div class="uiSubMenuItem">Vadodara</div>
                     <div class="uiSubMenuItem">Ghaziabad</div>
                     <div class="uiSubMenuItem">Ludhiana</div>
                     <div class="uiSubMenuItem">Agra</div>
                     <div class="uiSubMenuItem">Nashik</div>
                     <div class="uiSubMenuItem">Faridabad</div>
                     <div class="uiSubMenuItem">Meerut</div>
                     <div class="uiSubMenuItem">Rajkot</div>
                     <div class="uiSubMenuItem">Kalyan-Dombivli</div>
                     <div class="uiSubMenuItem">Vasai-Virar</div>
                     <div class="uiSubMenuItem">Varanasi</div>
                     <div class="uiSubMenuItem">Srinagar</div>
                     <div class="uiSubMenuItem">Aurangabad</div>
                     <div class="uiSubMenuItem">Dhanbad</div>
                     <div class="uiSubMenuItem">Amritsar</div>
                     <div class="uiSubMenuItem">Navi Mumbai</div>
                     <div class="uiSubMenuItem">Allahabad</div>
                     <div class="uiSubMenuItem">Howrah</div>
                     <div class="uiSubMenuItem">Ranchi</div>
                     <div class="uiSubMenuItem">Gwalior</div>
                     <div class="uiSubMenuItem">Jabalpur</div>
                     <div class="uiSubMenuItem">Coimbatore</div>
                     <div class="uiSubMenuItem">Vijayawada</div>
                     <div class="uiSubMenuItem">Jodhpur</div>
                     <div class="uiSubMenuItem">Madurai</div>
                     <div class="uiSubMenuItem">Raipur</div>
                     <div class="uiSubMenuItem">Kota</div>
                     <div class="uiSubMenuItem">Chandigarh</div>
                     <div class="uiSubMenuItem">Guwahati</div>
                     <div class="uiSubMenuItem">Solapur</div>
                     <div class="uiSubMenuItem">Hubli–Dharwad</div>
                     <div class="uiSubMenuItem">Tiruchirappalli</div>
                     <div class="uiSubMenuItem">Bareilly</div>
                     <div class="uiSubMenuItem">Mysore</div>
                     <div class="uiSubMenuItem">Tiruppur</div>
                     <div class="uiSubMenuItem">Gurgaon</div>
                     <div class="uiSubMenuItem">Aligarh</div>
                     <div class="uiSubMenuItem">Jalandhar</div>
                     <div class="uiSubMenuItem">Bhubaneswar</div>
                     <div class="uiSubMenuItem">Salem</div>
                     <div class="uiSubMenuItem">Mira-Bhayandar</div>
                     <div class="uiSubMenuItem">Warangal</div>
                     <div class="uiSubMenuItem">Jalgaon</div>
                     <div class="uiSubMenuItem">Guntur</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemItaly">Italy
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Rome</div>
                     <div class="uiSubMenuItem">Milan</div>
                     <div class="uiSubMenuItem">Naples</div>
                     <div class="uiSubMenuItem">Turin</div>
                     <div class="uiSubMenuItem">Palermo</div>
                     <div class="uiSubMenuItem">Genoa</div>
                     <div class="uiSubMenuItem">Bologna</div>
                     <div class="uiSubMenuItem">Florence</div>
                     <div class="uiSubMenuItem">Bari</div>
                     <div class="uiSubMenuItem">Catania</div>
                     <div class="uiSubMenuItem">Venice</div>
                     <div class="uiSubMenuItem">Verona</div>
                     <div class="uiSubMenuItem">Messina</div>
                     <div class="uiSubMenuItem">Padua</div>
                     <div class="uiSubMenuItem">Trieste</div>
                     <div class="uiSubMenuItem">Taranto</div>
                     <div class="uiSubMenuItem">Brescia</div>
                     <div class="uiSubMenuItem">Parma</div>
                     <div class="uiSubMenuItem">Prato</div>
                     <div class="uiSubMenuItem">Modena</div>
                     <div class="uiSubMenuItem">Reggio Calabria</div>
                     <div class="uiSubMenuItem">Reggio Emilia</div>
                     <div class="uiSubMenuItem">Perugia</div>
                     <div class="uiSubMenuItem">Ravenna</div>
                     <div class="uiSubMenuItem">Livorno</div>
                     <div class="uiSubMenuItem">Cagliari</div>
                     <div class="uiSubMenuItem">Foggia</div>
                     <div class="uiSubMenuItem">Rimini</div>
                     <div class="uiSubMenuItem">Salerno</div>
                     <div class="uiSubMenuItem">Ferrara</div>
                     <div class="uiSubMenuItem">Sassari</div>
                     <div class="uiSubMenuItem">Latina</div>
                     <div class="uiSubMenuItem">Giugliano in Campania</div>
                     <div class="uiSubMenuItem">Monza</div>
                     <div class="uiSubMenuItem">Syracuse</div>
                     <div class="uiSubMenuItem">Bergamo</div>
                     <div class="uiSubMenuItem">Pescara</div>
                     <div class="uiSubMenuItem">Trento</div>
                     <div class="uiSubMenuItem">Forlì</div>
                     <div class="uiSubMenuItem">Vicenza</div>
                     <div class="uiSubMenuItem">Terni</div>
                     <div class="uiSubMenuItem">Bolzano</div>
                     <div class="uiSubMenuItem">Novara</div>
                     <div class="uiSubMenuItem">Piacenza</div>
                     <div class="uiSubMenuItem">Ancona</div>
                     <div class="uiSubMenuItem">Andria</div>
                     <div class="uiSubMenuItem">Udine</div>
                     <div class="uiSubMenuItem">Arezzo</div>
                     <div class="uiSubMenuItem">Cesena</div>
                     <div class="uiSubMenuItem">Lecce</div>
                     <div class="uiSubMenuItem">Pesaro</div>
                     <div class="uiSubMenuItem">Barletta</div>
                     <div class="uiSubMenuItem">Alessandria</div>
                     <div class="uiSubMenuItem">La Spezia</div>
                     <div class="uiSubMenuItem">Pistoia</div>
                     <div class="uiSubMenuItem">Pisa</div>
                     <div class="uiSubMenuItem">Catanzaro</div>
                     <div class="uiSubMenuItem">Guidonia Montecelio</div>
                     <div class="uiSubMenuItem">Lucca</div>
                     <div class="uiSubMenuItem">Brindisi</div>
                     <div class="uiSubMenuItem">Torre del Greco</div>
                     <div class="uiSubMenuItem">Treviso</div>
                     <div class="uiSubMenuItem">Busto Arsizio</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemBrazil">Brazil
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">São Paulo</div>
                     <div class="uiSubMenuItem">Rio de Janeiro</div>
                     <div class="uiSubMenuItem">Brasília</div>
                     <div class="uiSubMenuItem">Salvador</div>
                     <div class="uiSubMenuItem">Fortaleza</div>
                     <div class="uiSubMenuItem">Belo Horizonte</div>
                     <div class="uiSubMenuItem">Manaus</div>
                     <div class="uiSubMenuItem">Curitiba</div>
                     <div class="uiSubMenuItem">Recife</div>
                     <div class="uiSubMenuItem">Goiânia</div>
                     <div class="uiSubMenuItem">Belém</div>
                     <div class="uiSubMenuItem">Porto Alegre</div>
                     <div class="uiSubMenuItem">Campinas</div>
                     <div class="uiSubMenuItem">Guarulhos</div>
                     <div class="uiSubMenuItem">São Luís</div>
                     <div class="uiSubMenuItem">São Gonçalo</div>
                     <div class="uiSubMenuItem">Maceió</div>
                     <div class="uiSubMenuItem">Duque de Caxias</div>
                     <div class="uiSubMenuItem">Campo Grande</div>
                     <div class="uiSubMenuItem">Natal</div>
                     <div class="uiSubMenuItem">Teresina</div>
                     <div class="uiSubMenuItem">São Bernardo do Campo</div>
                     <div class="uiSubMenuItem">Nova Iguaçu</div>
                     <div class="uiSubMenuItem">João Pessoa</div>
                     <div class="uiSubMenuItem">Santo André</div>
                     <div class="uiSubMenuItem">São José dos Campos</div>
                     <div class="uiSubMenuItem">Jaboatão dos Guararapes</div>
                     <div class="uiSubMenuItem">Osasco</div>
                     <div class="uiSubMenuItem">Ribeirão Preto</div>
                     <div class="uiSubMenuItem">Uberlândia</div>
                     <div class="uiSubMenuItem">Sorocaba</div>
                     <div class="uiSubMenuItem">Contagem</div>
                     <div class="uiSubMenuItem">Aracaju</div>
                     <div class="uiSubMenuItem">Feira de Santana</div>
                     <div class="uiSubMenuItem">Cuiabá</div>
                     <div class="uiSubMenuItem">Joinville</div>
                     <div class="uiSubMenuItem">Aparecida de Goiânia</div>
                     <div class="uiSubMenuItem">Juiz de Fora</div>
                     <div class="uiSubMenuItem">Londrina</div>
                     <div class="uiSubMenuItem">Ananindeua</div>
                     <div class="uiSubMenuItem">Porto Velho</div>
                     <div class="uiSubMenuItem">Niterói</div>
                     <div class="uiSubMenuItem">Belford Roxo</div>
                     <div class="uiSubMenuItem">Serra</div>
                     <div class="uiSubMenuItem">Caxias do Sul</div>
                     <div class="uiSubMenuItem">Campos dos Goytacazes</div>
                     <div class="uiSubMenuItem">Macapá</div>
                     <div class="uiSubMenuItem">Florianópolis</div>
                     <div class="uiSubMenuItem">Vila Velha</div>
                     <div class="uiSubMenuItem">São João de Meriti</div>
                     <div class="uiSubMenuItem">Mauá</div>
                     <div class="uiSubMenuItem">São José do Rio Preto</div>
                     <div class="uiSubMenuItem">Mogi das Cruzes</div>
                     <div class="uiSubMenuItem">Santos</div>
                     <div class="uiSubMenuItem">Betim</div>
                     <div class="uiSubMenuItem">Diadema</div>
                     <div class="uiSubMenuItem">Maringá</div>
                     <div class="uiSubMenuItem">Jundiaí</div>
                     <div class="uiSubMenuItem">Campina Grande</div>
                     <div class="uiSubMenuItem">Montes Claros</div>
                     <div class="uiSubMenuItem">Rio Branco</div>
                     <div class="uiSubMenuItem">Piracicaba</div>
                     <div class="uiSubMenuItem">Carapicuíba</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemCanada">Canada
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Abbotsford</div>
                     <div class="uiSubMenuItem">Burnaby</div>
                     <div class="uiSubMenuItem">Coquitlam</div>
                     <div class="uiSubMenuItem">Delta</div>
                     <div class="uiSubMenuItem">Fort St. John</div>
                     <div class="uiSubMenuItem">Kamloops</div>
                     <div class="uiSubMenuItem">Kelowna</div>
                     <div class="uiSubMenuItem">Langford</div>
                     <div class="uiSubMenuItem">Langley</div>
                     <div class="uiSubMenuItem">Maple Ridge</div>
                     <div class="uiSubMenuItem">Nanaimo</div>
                     <div class="uiSubMenuItem">New Westminster</div>
                     <div class="uiSubMenuItem">North Vancouver</div>
                     <div class="uiSubMenuItem">Penticton</div>
                     <div class="uiSubMenuItem">Port Coquitlam</div>
                     <div class="uiSubMenuItem">Prince George</div>
                     <div class="uiSubMenuItem">Richmond</div>
                     <div class="uiSubMenuItem">Surrey</div>
                     <div class="uiSubMenuItem">Vancouver</div>
                     <div class="uiSubMenuItem">Vernon</div>
                     <div class="uiSubMenuItem">Victoria</div>
                     <div class="uiSubMenuItem">West Kelowna</div>
                     <div class="uiSubMenuItem">White Rock</div>
                     <div class="uiSubMenuItem">Ottawa</div>
                     <div class="uiSubMenuItem">Edmonton</div>
                     <div class="uiSubMenuItem">Winnipeg</div>
                     <div class="uiSubMenuItem">Fredericton</div>
                     <div class="uiSubMenuItem">Halifax</div>
                     <div class="uiSubMenuItem">Toronto</div>
                     <div class="uiSubMenuItem">Charlottetown</div>
                     <div class="uiSubMenuItem">Quebec City</div>
                     <div class="uiSubMenuItem">Regina</div>
                     <div class="uiSubMenuItem">Yellowknife</div>
                     <div class="uiSubMenuItem">Iqaluit</div>
                     <div class="uiSubMenuItem">Whitehorse</div>
                     <div class="uiSubMenuItem">Calgary</div>
                     <div class="uiSubMenuItem">Brandon</div>
                     <div class="uiSubMenuItem">Moncton</div>
                     <div class="uiSubMenuItem">Saint John</div>
                     <div class="uiSubMenuItem">Brampton</div>
                     <div class="uiSubMenuItem">Brantford</div>
                     <div class="uiSubMenuItem">Burlington</div>
                     <div class="uiSubMenuItem">Cambridge</div>
                     <div class="uiSubMenuItem">Greater Sudbury</div>
                     <div class="uiSubMenuItem">Guelph</div>
                     <div class="uiSubMenuItem">Hamilton</div>
                     <div class="uiSubMenuItem">Kingston</div>
                     <div class="uiSubMenuItem">Kitchener</div>
                     <div class="uiSubMenuItem">London</div>
                     <div class="uiSubMenuItem">Markham</div>
                     <div class="uiSubMenuItem">Mississauga</div>
                     <div class="uiSubMenuItem">Niagara Falls</div>
                     <div class="uiSubMenuItem">Oshawa</div>
                     <div class="uiSubMenuItem">Richmond Hill</div>
                     <div class="uiSubMenuItem">St. Catharines</div>
                     <div class="uiSubMenuItem">Thunder Bay</div>
                     <div class="uiSubMenuItem">Vaughan</div>
                     <div class="uiSubMenuItem">Waterloo</div>
                     <div class="uiSubMenuItem">Windsor</div>
                     <div class="uiSubMenuItem">Welland</div>
                     <div class="uiSubMenuItem">Woodstock</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemRussia">Russia
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Moscow</div>
                     <div class="uiSubMenuItem">Saint Petersburg</div>
                     <div class="uiSubMenuItem">Novosibirsk</div>
                     <div class="uiSubMenuItem">Yekaterinburg</div>
                     <div class="uiSubMenuItem">Nizhny Novgorod</div>
                     <div class="uiSubMenuItem">Kazan</div>
                     <div class="uiSubMenuItem">Chelyabinsk</div>
                     <div class="uiSubMenuItem">Omsk</div>
                     <div class="uiSubMenuItem">Samara</div>
                     <div class="uiSubMenuItem">Rostov-on-Don</div>
                     <div class="uiSubMenuItem">Ufa</div>
                     <div class="uiSubMenuItem">Krasnoyarsk</div>
                     <div class="uiSubMenuItem">Perm</div>
                     <div class="uiSubMenuItem">Voronezh</div>
                     <div class="uiSubMenuItem">Volgograd</div>
                     <div class="uiSubMenuItem">Krasnodar</div>
                     <div class="uiSubMenuItem">Saratov</div>
                     <div class="uiSubMenuItem">Tyumen</div>
                     <div class="uiSubMenuItem">Tolyatti</div>
                     <div class="uiSubMenuItem">Izhevsk</div>
                     <div class="uiSubMenuItem">Barnaul</div>
                     <div class="uiSubMenuItem">Ulyanovsk</div>
                     <div class="uiSubMenuItem">Irkutsk</div>
                     <div class="uiSubMenuItem">Khabarovsk</div>
                     <div class="uiSubMenuItem">Yaroslavl</div>
                     <div class="uiSubMenuItem">Vladivostok</div>
                     <div class="uiSubMenuItem">Makhachkala</div>
                     <div class="uiSubMenuItem">Tomsk</div>
                     <div class="uiSubMenuItem">Orenburg</div>
                     <div class="uiSubMenuItem">Kemerovo</div>
                     <div class="uiSubMenuItem">Novokuznetsk</div>
                     <div class="uiSubMenuItem">Ryazan</div>
                     <div class="uiSubMenuItem">Astrakhan</div>
                     <div class="uiSubMenuItem">Penza</div>
                     <div class="uiSubMenuItem">Lipetsk</div>
                     <div class="uiSubMenuItem">Kirov</div>
                     <div class="uiSubMenuItem">Cheboksary</div>
                     <div class="uiSubMenuItem">Tula</div>
                     <div class="uiSubMenuItem">Kaliningrad</div>
                     <div class="uiSubMenuItem">Balashikha</div>
                     <div class="uiSubMenuItem">Kursk</div>
                     <div class="uiSubMenuItem">Stavropol</div>
                     <div class="uiSubMenuItem">Ulan-Ude</div>
                     <div class="uiSubMenuItem">Tver</div>
                     <div class="uiSubMenuItem">Sochi</div>
                     <div class="uiSubMenuItem">Ivanovo</div>
                     <div class="uiSubMenuItem">Bryansk</div>
                     <div class="uiSubMenuItem">Belgorod</div>
                     <div class="uiSubMenuItem">Surgut</div>
                     <div class="uiSubMenuItem">Vladimir</div>
                     <div class="uiSubMenuItem">Arkhangelsk</div>
                     <div class="uiSubMenuItem">Chita</div>
                     <div class="uiSubMenuItem">Kaluga</div>
                     <div class="uiSubMenuItem">Smolensk</div>
                     <div class="uiSubMenuItem">Kurgan</div>
                     <div class="uiSubMenuItem">Cherepovets</div>
                     <div class="uiSubMenuItem">Oryol</div>
                     <div class="uiSubMenuItem">Saransk</div>
                     <div class="uiSubMenuItem">Vologda</div>
                     <div class="uiSubMenuItem">Yakutsk</div>
                     <div class="uiSubMenuItem">Vladikavkaz</div>
                   </div>
                </div>
                <div class="uiMenuItem" id="uiMenuItemKorea">Korea
                <div class="dropdown-content">
                    <input type="text" id="searchSubMenuItems" style="margin-bottom: 10px;">
                     <div class="uiSubMenuItem">Seoul</div>
                     <div class="uiSubMenuItem">Busan</div>
                     <div class="uiSubMenuItem">Incheon</div>
                     <div class="uiSubMenuItem">Daegu</div>
                     <div class="uiSubMenuItem">Daejeon</div>
                     <div class="uiSubMenuItem">Gwangju</div>
                     <div class="uiSubMenuItem">Suwon</div>
                     <div class="uiSubMenuItem">Ulsan</div>
                     <div class="uiSubMenuItem">Changwon</div>
                     <div class="uiSubMenuItem">Goyang</div>
                     <div class="uiSubMenuItem">Yongin</div>
                     <div class="uiSubMenuItem">Seongnam</div>
                     <div class="uiSubMenuItem">Bucheon</div>
                     <div class="uiSubMenuItem">Cheongju</div>
                     <div class="uiSubMenuItem">Ansan</div>
                     <div class="uiSubMenuItem">Jeonju</div>
                     <div class="uiSubMenuItem">Cheonan</div>
                     <div class="uiSubMenuItem">Namyangju</div>
                     <div class="uiSubMenuItem">Hwaseong</div>
                     <div class="uiSubMenuItem">Anyang</div>
                     <div class="uiSubMenuItem">Gimhae</div>
                     <div class="uiSubMenuItem">Pohang</div>
                     <div class="uiSubMenuItem">Pyeongtaek</div>
                     <div class="uiSubMenuItem">Jeju (City)</div>
                     <div class="uiSubMenuItem">Siheung</div>
                     <div class="uiSubMenuItem">Uijeongbu</div>
                     <div class="uiSubMenuItem">Gumi</div>
                     <div class="uiSubMenuItem">Paju</div>
                     <div class="uiSubMenuItem">Gimpo</div>
                     <div class="uiSubMenuItem">Jinju</div>
                     <div class="uiSubMenuItem">Gwangmyeong</div>
                     <div class="uiSubMenuItem">Wonju</div>
                     <div class="uiSubMenuItem">Asan</div>
                     <div class="uiSubMenuItem">Gwangju</div>
                     <div class="uiSubMenuItem">Iksan</div>
                     <div class="uiSubMenuItem">Yangsan</div>
                     <div class="uiSubMenuItem">Gunpo</div>
                     <div class="uiSubMenuItem">Chuncheon</div>
                     <div class="uiSubMenuItem">Gyeongsan</div>
                     <div class="uiSubMenuItem">Gunsan</div>
                     <div class="uiSubMenuItem">Yeosu</div>
                     <div class="uiSubMenuItem">Suncheon</div>
                     <div class="uiSubMenuItem">Gyeongju</div>
                     <div class="uiSubMenuItem">Geoje</div>
                     <div class="uiSubMenuItem">Mokpo</div>
                     <div class="uiSubMenuItem">Gangneung</div>
                     <div class="uiSubMenuItem">Osan</div>
                     <div class="uiSubMenuItem">Chungju</div>
                     <div class="uiSubMenuItem">Icheon</div>
                     <div class="uiSubMenuItem">Yangju</div>
                     <div class="uiSubMenuItem">Sejong</div>
                     <div class="uiSubMenuItem">Anseong</div>
                     <div class="uiSubMenuItem">Guri</div>
                     <div class="uiSubMenuItem">Seosan</div>
                     <div class="uiSubMenuItem">Andong</div>
                     <div class="uiSubMenuItem">Dangjin</div>
                     <div class="uiSubMenuItem">Pocheon</div>
                     <div class="uiSubMenuItem">Uiwang</div>
                     <div class="uiSubMenuItem">Hanam</div>
                     <div class="uiSubMenuItem">Seogwipo</div>
                     <div class="uiSubMenuItem">Gwangyang</div>
                   </div>
                </div>
                </div>

                <div class="uiMenuGroup" id="uiMenuGroup11">
                <div class="uiMenuItem">Turkey</div>
                <div class="uiMenuItem">Switzerland</div>
                <div class="uiMenuItem">Poland</div>
                <div class="uiMenuItem">Sweden</div>
                <div class="uiMenuItem">Belgium</div>
                <div class="uiMenuItem">Austria</div>
                <div class="uiMenuItem">Norway</div>
                <div class="uiMenuItem">UAE</div>
                <div class="uiMenuItem">Ireland</div>
                <div class="uiMenuItem">South Africa</div>
                <div class="uiMenuItem">Hong Kong</div>
                <div class="uiMenuItem">Denmark</div>
                </div>

                <div class="uiMenuGroup" id="uiMenuGroup12">
                <div class="uiMenuItem">Czech Republic</div>
                <div class="uiMenuItem">Romania</div>
                <div class="uiMenuItem">Portugal</div>
                <div class="uiMenuItem">Greece</div>
                <div class="uiMenuItem">New Zeland</div>
                <div class="uiMenuItem">Hungary</div>
                <div class="uiMenuItem">Ukraine</div>
                <div class="uiMenuItem">Slovakia</div>
                <div class="uiMenuItem">Bulgaria</div>
                <div class="uiMenuItem">Slovenia</div>
                <div class="uiMenuItem">Serbia</div>
                <div class="uiMenuItem">Bosnia and Herzegovina</div>
                </div>

                <div class="uiMenuGroup" id="uiMenuGroup13">
                <div class="uiMenuItem">Spain</div>
                <div class="uiMenuItem">Australia</div>
                <div class="uiMenuItem">Mexico</div>
                <div class="uiMenuItem">Netherlands</div>
                <div class="uiMenuItem">Singapore</div>
                <div class="uiMenuItem">Finland</div>
                <div class="uiMenuItem">Egypt</div>
                <div class="uiMenuItem">Peru</div>
                <div class="uiMenuItem">Albania</div>
                <div class="uiMenuItem">Macedonia</div>
                <div class="uiMenuItem">Montenegro</div>
                <div class="uiMenuItem">Luxembourg</div>
                </div>
            </div> 
    </div>
</div>  
    <div class="choiceLabel" id="priceChoiceLabel">
        <span class="choiceLabelText">Price ▼</span>
      <div class="choiceMenu" id="priceChoiceMenu">
           <div class="thirdMenuBlock">
                <div class="priceSelection">
                   <a href="#" class="choiceMenuClose" style="text-decoration: none; color: #7d7d7d; font-weight: 700; position: relative; top: 0px; left: 0px; font-size: 15px;">X</a>
            <div class="min_max_price">
              Min: 
               <input id="search_by_price_number_min" type="text" size="9" value="">
              Max:
               <input id="search_by_price_number_max" type="text" size="9" value="">
            </div>
          <div class="chooseCurrency">
                <input type="radio" name="data[currency]" value="eur">
                <label for="currency_eur">€</label> &nbsp;
                <input type="radio" name="data[currency]" value="dol">
                <label for="currency_dol">$</label> &nbsp;
                <input type="radio" name="data[currency]" value="rsd">
                <label for="currency_din">Din</label>
               </div>
             <div class="select_agreement_exchange">
                <label for="price_text_agreement" id="price_text_agreement">
                <input type="checkbox" name="data[price_text][]" value="Agreement"> Agreement </label>
              &nbsp;
                <label for="price_text_exchange" id="price_text_exchange">
                <input type="checkbox" name="data[price_text][]" value="Exchange"> Exchange </label>
              </div>               
            <div class="priceButtons">
              <input type="button" action-name="confirm" value="Apply">
              <input type="button" action-name="reset" value="Reset"> 
            </div>     
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (isset($listings))
        @foreach ($listings as $listing)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $listing['photo'] }}">
                    <div class="card-body">
                    <p class="card-title">{{ $listing['title'] }}</p>
                    <p class="card-text">{{ $listing['description'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="listing/{{ $listing['id'] }}" class="btn btn-sm btn-outline-secondary">View</a>
                          {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                      </div>
                      <small class="text-muted">{{ $listing['created'] }}</small>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach

            {{-- {{ $users->links('default') }} --}}

        @else
            There currently are no listings.
        @endif

        </div>
    </div>
</div>

@endsection
