<?php
declare(strict_types=1);
namespace AzSIS\SQL;

function SQL_Tables(): array {
    // TODO: check SPED exit & exit outcomes
    // TODO: check quarter sorting on https://grades.allaccelerated.org/view/student.php?StudentId=111120

    $AzSIS_SQL_Tables['PossiblePersonalTitlePrefixes'] = [
        'columns' => [
            'PersonalTitlePrefix VARCHAR(10) NOT NULL',
            'PRIMARY KEY (PersonalTitlePrefix)',
            'CHECK (PersonalTitlePrefix<>"")'
        ],
        'values' => [
            ['Dr.'],
            ['Miss'],
            ['Mr.'],
            ['Mrs.'],
            ['Ms.'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleGenerationCodeSuffixes'] = [
        'columns' => [
            'GenerationCodeSuffix VARCHAR(10) NOT NULL',
            'PRIMARY KEY (GenerationCodeSuffix)',
            'CHECK (GenerationCodeSuffix<>"")'
        ],
        'values' => [
            ['Jr.'],
            ['Sr.'],
            ['I'],
            ['II'],
            ['III'],
            ['IV'],
            ['V'],
            ['VI'],
            ['VII'],
            ['VIII'],
            ['IX'],
            ['X'],
        ],
    ];

    // Use Case version 12.0
    $AzSIS_SQL_Tables['PossibleTribalAffiliations'] = [
        'columns' => [
            'TribalAffiliationCode VARCHAR(50) NOT NULL',
            'TribalAffiliation VARCHAR(255) NOT NULL',
            'IsAzEDSReportableTribalAffiliation BOOLEAN NOT NULL',
            'PRIMARY KEY (TribalAffiliationCode)',
            'UNIQUE (TribalAffiliation)',
            'CHECK (TribalAffiliationCode<>"")',
            'CHECK (TribalAffiliation<>"")'
        ],
        'values' => [
            ['Ak-Chin Indian Community', 'Ak-Chin Indian Community', true],
            ['Cocopah Indian Tribe', 'Cocopah Indian Tribe', true],
            ['Colorado River Indian Tribes', 'Colorado River Indian Tribes', true],
            ['Fort McDowell Yavapai Nation', 'Fort McDowell Yavapai Nation', true],
            ['Fort Mojave Indian Tribe', 'Fort Mojave Indian Tribe', true],
            ['Gila River Indian Community', 'Gila River Indian Community', true],
            ['Havasupai Tribe', 'Havasupai Tribe', true],
            ['Hopi Tribe', 'Hopi Tribe', true],
            ['Hualapai Tribe', 'Hualapai Tribe', true],
            ['Kaibab Band of Paiute Indians', 'Kaibab Band of Paiute Indians', true],
            ['Navajo Nation', 'Navajo Nation', true],
            ['Pascua Yaqui Tribe', 'Pascua Yaqui Tribe', true],
            ['Pueblo of Zuni', 'Pueblo of Zuni', true],
            ['Quechan Tribe', 'Quechan Tribe', true],
            ['Salt River Pima-Maricopa Indian Community', 'Salt River Pima-Maricopa Indian Community', true],
            ['San Carlos Apache Tribe', 'San Carlos Apache Tribe', true],
            ['San Juan Southern Paiute', 'San Juan Southern Paiute', true],
            ['Tohono O\'odham Nation', 'Tohono O\'odham Nation', true],
            ['Tonto Apache Tribe', 'Tonto Apache Tribe', true],
            ['White Mountain Apache Tribe', 'White Mountain Apache Tribe', true],
            ['Yavapai-Apache Nation', 'Yavapai-Apache Nation', true],
            ['Yavapai-Prescott Indian Tribe', 'Yavapai-Prescott Indian Tribe', true],
            ['TA001', 'Absentee-Shawnee Tribe of Indians', true],
            ['TA002', 'Agdaagux Tribe of King Cove', true],
            ['TA003', 'Agua Caliente Band of Cahuilla Indians of the Agua Caliente Indian Reservation', true],
            ['TA004', 'Akiachak Native Community', true],
            ['TA005', 'Akiak Native Community', true],
            ['TA006', 'Alabama-Coushatta Tribe of Texas', true],
            ['TA007', 'Alabama-Quassarte Tribal Town', true],
            ['TA008', 'Alatna Village', true],
            ['TA009', 'Algaaciq Native Village (St. Mary\'s)', true],
            ['TA010', 'Allakaket Village', true],
            ['TA011', 'Alturas Indian Rancheria', true],
            ['TA012', 'Angoon Community Association', true],
            ['TA013', 'Anvik Village', true],
            ['TA014', 'Apache Tribe of Oklahoma', true],
            ['TA015', 'Arapaho Tribe of the Wind River Reservation', true],
            ['TA016', 'Arctic Village (See Native Village of Venetie Tribal Government)', true],
            ['TA017', 'Aroostook Band of Micmac Indians', true],
            ['TA018', 'Asa\'carsarmiut Tribe', true],
            ['TA019', 'Assiniboine and Sioux Tribes of the Fort Peck Indian Reservation', true],
            ['TA020', 'Atqasuk Village (Atkasook)', true],
            ['TA021', 'Augustine Band of Cahuilla Indians ', true],
            ['TA022', 'Bad River Band of the Lake Superior Tribe of Chippewa Indians of the Bad River Reservation', true],
            ['TA023', 'Bay Mills Indian Community', true],
            ['TA024', 'Bear River Band of the Rohnerville Rancheria', true],
            ['TA025', 'Beaver Village', true],
            ['TA026', 'Berry Creek Rancheria of Maidu Indians of California', true],
            ['TA027', 'Big Lagoon Rancheria', true],
            ['TA028', 'Big Pine Band Paiute Tribe of the Owens Valley', true],
            ['TA029', 'Big Sandy Rancheria of Western Mono Indians of California', true],
            ['TA030', 'Big Valley Band of Pomo Indians of the Big Valley Rancheria', true],
            ['TA031', 'Birch Creek Tribe', true],
            ['TA032', 'Bishop Pauite Tribe (previously listed as Paiute-Shoshone Indians of the Bishop Community of the Bishop Colony)', true],
            ['TA033', 'Blackfeet Tribe of the Blackfeet Indian Reservation of Montana', true],
            ['TA034', 'Blue Lake Rancheria', true],
            ['TA035', 'Bridgeport Indian Colony', true],
            ['TA036', 'Buena Vista Rancheria of Me-Wuk Indians of California', true],
            ['TA037', 'Burns Paiute Tribe', true],
            ['TA038', 'Cabazon Band of  Mission Indians', true],
            ['TA039', 'Cachil DeHe Band of Wintun Indians of the Colusa Indian Community of the Colusa Rancheria', true],
            ['TA040', 'Caddo Nation of Oklahoma', true],
            ['TA041', 'Cahto Indian Tribe of the Laytonville Rancheria', true],
            ['TA042', 'Cahuilla Band of Mission Indians of the Cahuilla Reservation', true],
            ['TA043', 'California Valley Miwok Tribe ', true],
            ['TA044', 'Campo Band of Diegueño Mission Indians of the Campo Indian Reservation', true],
            ['TA045', 'Capitan Grande Band of Diegueño Mission Indians of California:Barona Group of Capitan Grande Band of Mission Indians of the Barona Reservation; Viejas (Baron Long) Group of Capitan Grande Band of Mission Indians of the Viejas Reservation', true],
            ['TA046', 'Catawba Indian Nation (Catawba Tribe of South Carolina)', true],
            ['TA047', 'Cayuga Nation', true],
            ['TA048', 'Cedarville Rancheria', true],
            ['TA049', 'Central Council of the Tlingit & Haida Indian Tribes', true],
            ['TA050', 'Chalkyitsik Village', true],
            ['TA051', 'Cheesh-Na Tribe (formerly the Native Village of Chistochina)', true],
            ['TA052', 'Chemehuevi Indian Tribe of the Chemehuevi Reservation', true],
            ['TA053', 'Cher-Ae Heights Indian Community of the Trinidad Rancheria', true],
            ['TA054', 'Cherokee Nation', true],
            ['TA055', 'Chevak Native Village', true],
            ['TA056', 'Cheyenne and Arapaho Tribes', true],
            ['TA057', 'Cheyenne River Sioux Tribe of the Cheyenne River Reservation', true],
            ['TA058', 'Chickahominy Indian Tribe', true],
            ['TA059', 'Chickahominy Indian Tribe-Eastern Division', true],
            ['TA060', 'Chickaloon Native Village', true],
            ['TA061', 'Chicken Ranch Rancheria of Me-Wuk Indians of California', true],
            ['TA062', 'Chignik Bay Tribal Council (formerly the Native Village of Chignik)', true],
            ['TA063', 'Chignik Lake Village', true],
            ['TA064', 'Chilkat Indian Village (Klukwan)', true],
            ['TA065', 'Chilkoot Indian Association (Haines)', true],
            ['TA066', 'Chinik Eskimo Community (Golovin)', true],
            ['TA067', 'Chippewa-Cree Indians of the Rocky Boy\'s Reservation', true],
            ['TA068', 'Chitimacha Tribe of Louisiana', true],
            ['TA069', 'Chuloonawick Native Village', true],
            ['TA070', 'Circle Native Community', true],
            ['TA071', 'Citizen Potawatomi Nation', true],
            ['TA072', 'Cloverdale Rancheria of Pomo Indians of California', true],
            ['TA073', 'Coeur D’Alene Tribe', true],
            ['TA074', 'Cold Springs Rancheria of Mono Indians of California', true],
            ['TA075', 'Comanche Nation', true],
            ['TA076', 'Confederated Salish and Kootenai Tribes of the Flathead Reservation', true],
            ['TA077', 'Confederated Tribes and Bands of the Yakama Nation', true],
            ['TA078', 'Confederated Tribes of the Chehalis Reservation', true],
            ['TA079', 'Confederated Tribes of the Colville Reservation', true],
            ['TA080', 'Confederated Tribes of the Coos, Lower Umpqua and Siuslaw Indians of Oregon', true],
            ['TA081', 'Confederated Tribes of the Goshute Reservation (Nevada and Utah)', true],
            ['TA082', 'Confederated Tribes of the Grand Ronde Community of Oregon', true],
            ['TA083', 'Confederated Tribes of the Siletz Reservation', true],
            ['TA084', 'Confederated Tribes of the Umatilla Indian Reservation', true],
            ['TA085', 'Confederated Tribes of the Warm Springs Reservation of Oregon', true],
            ['TA086', 'Coquille Indian Tribe', true],
            ['TA087', 'Cortina Indian Rancheria of Wintun Indians of California', true],
            ['TA088', 'Coushatta Tribe of Louisiana', true],
            ['TA089', 'Cow Creek Band of Umpqua Tribe of Indians', true],
            ['TA090', 'Cowlitz Indian Tribe', true],
            ['TA091', 'Coyote Valley Band of Pomo Indians of California', true],
            ['TA092', 'Craig Community Association', true],
            ['TA093', 'Crow Creek Sioux Tribe of the Crow Creek Reservation', true],
            ['TA094', 'Crow Tribe of Montana', true],
            ['TA095', 'Curyung Tribal Council', true],
            ['TA096', 'Death Valley Timbi-Sha Shoshone Tribe', true],
            ['TA097', 'Delaware Nation', true],
            ['TA098', 'Delaware Tribe of Indians', true],
            ['TA099', 'Douglas Indian Association', true],
            ['TA100', 'Dry Creek Rancheria of Pomo Indians ', true],
            ['TA101', 'Duckwater Shoshone Tribe of the Duckwater Reservation', true],
            ['TA102', 'Eastern Band of Cherokee Indians ', true],
            ['TA103', 'Eastern Shawnee Tribe of Oklahoma', true],
            ['TA104', 'Egegik Village', true],
            ['TA105', 'Eklutna Native Village', true],
            ['TA106', 'Ekwok Village', true],
            ['TA107', 'Elem Indian Colony of Pomo Indians of the Sulphur Bank Rancheria', true],
            ['TA108', 'Elk Valley Rancheria', true],
            ['TA109', 'Ely Shoshone Tribe of Nevada', true],
            ['TA110', 'Emmonak Village', true],
            ['TA111', 'Enterprise Rancheria of Maidu Indians of California', true],
            ['TA112', 'Evansville Village (aka Bettles Field)', true],
            ['TA113', 'Ewiiaapaayp Band of Kumeyaay Indians', true],
            ['TA114', 'Federated Indians of Graton Rancheria', true],
            ['TA115', 'Flandreau Santee Sioux Tribe of South Dakota', true],
            ['TA116', 'Forest County Potawatomi Community', true],
            ['TA117', 'Fort Belknap Indian Community of the Fort Belknap Reservation of Montana', true],
            ['TA118', 'Fort Bidwell Indian Community of the Fort Bidwell Reservation of California', true],
            ['TA119', 'Fort Independence Indian Community of Paiute Indians of the Fort Independence Reservation', true],
            ['TA120', 'Fort McDermitt Paiute and Shoshone Tribes of the Fort McDermitt Indian Reservation (Nevada and Oregon)', true],
            ['TA121', 'Fort Sill Apache Tribe of Oklahoma', true],
            ['TA122', 'Galena Village (aka Louden Village)', true],
            ['TA123', 'Grand Traverse Band of Ottawa and Chippewa Indians', true],
            ['TA124', 'Greenville Rancheria', true],
            ['TA125', 'Grindstone Indian Rancheria of Wintun-Wailaki Indians of California', true],
            ['TA126', 'Guidiville Rancheria of California', true],
            ['TA127', 'Gulkana Village', true],
            ['TA128', 'Habematolel Pomo of Upper Lake', true],
            ['TA129', 'Hannahville Indian Community', true],
            ['TA130', 'Healy Lake Village', true],
            ['TA131', 'Ho-Chunk Nation of Wisconsin', true],
            ['TA132', 'Hoh Indian Tribe ', true],
            ['TA133', 'Holy Cross Village', true],
            ['TA134', 'Hoonah Indian Association', true],
            ['TA135', 'Hoopa Valley Tribe', true],
            ['TA136', 'Hopland Band of Pomo Indians', true],
            ['TA137', 'Houlton Band of Maliseet Indians', true],
            ['TA138', 'Hughes Village', true],
            ['TA139', 'Huslia Village', true],
            ['TA140', 'Hydaburg Cooperative Association', true],
            ['TA141', 'Igiugig Village', true],
            ['TA142', 'Inaja Band of Diegueño Mission Indians of the Inaja and Cosmit Reservation', true],
            ['TA143', 'Inupiat Community of the Arctic Slope', true],
            ['TA144', 'Ione Band of Miwok Indians of California', true],
            ['TA145', 'Iowa Tribe  of Kansas and Nebraska', true],
            ['TA146', 'Iowa Tribe of Kansas and Nebraska', true],
            ['TA147', 'Iowa Tribe of Oklahoma', true],
            ['TA148', 'Iqurmuit Traditional Council (formerly the Native Village of Russian Mission)', true],
            ['TA149', 'Ivanoff Bay Village', true],
            ['TA150', 'Jackson Band of Miwuk Indians', true],
            ['TA151', 'Jamestown S’Klallam Tribe', true],
            ['TA152', 'Jamul Indian Village of California', true],
            ['TA153', 'Jena Band of Choctaw Indians', true],
            ['TA154', 'Jicarilla Apache Nation', true],
            ['TA155', 'Kaguyak Village', true],
            ['TA156', 'Kaktovik Village (aka Barter Island)', true],
            ['TA157', 'Kalispel Indian Community of the Kalispel Reservation', true],
            ['TA158', 'Karuk Tribe ', true],
            ['TA159', 'Kashia Band of Pomo Indians of the Stewart’s Point Rancheria', true],
            ['TA160', 'Kasigluk Traditional Elders Council (formerly the Native Village of Kasigluk)', true],
            ['TA161', 'Kaw Nation', true],
            ['TA162', 'Kenaitze Indian Tribe', true],
            ['TA163', 'Ketchikan Indian Corporation', true],
            ['TA164', 'Kewa Pueblo', true],
            ['TA165', 'Keweenaw Bay Indian Community', true],
            ['TA166', 'Kialegee Tribal Town', true],
            ['TA167', 'Kickapoo Traditional Tribe of Texas', true],
            ['TA168', 'Kickapoo Tribe of Indians of the Kickapoo Reservation in Kansas', true],
            ['TA169', 'Kickapoo Tribe of Oklahoma', true],
            ['TA170', 'King Island Native Community', true],
            ['TA171', 'King Salmon Tribe', true],
            ['TA172', 'Kiowa Indian Tribe of Oklahoma', true],
            ['TA173', 'Klamath Tribes ', true],
            ['TA174', 'Klawock Cooperative Association', true],
            ['TA175', 'Knik Tribe', true],
            ['TA176', 'Koi Nation of Northern California', true],
            ['TA177', 'Kokhanok Village', true],
            ['TA178', 'Kootenai Tribe of Idaho', true],
            ['TA179', 'Koyukuk Native Village', true],
            ['TA180', 'La Jolla Band of Luiseño Indians ', true],
            ['TA181', 'La Posta Band of Diegueño Mission Indians of the La Posta Indian Reservation', true],
            ['TA182', 'Lac Courte Oreilles Band of Lake Superior Chippewa Indians of Wisconsin', true],
            ['TA183', 'Lac du Flambeau Band of Lake Superior Chippewa Indians of the Lac du Flambeau Reservation of Wisconsin', true],
            ['TA184', 'Lac Vieux Desert Band of Lake Superior Chippewa Indians of Michigan', true],
            ['TA185', 'Las Vegas Tribe of Paiute Indians of the Las Vegas Indian Colony', true],
            ['TA186', 'Levelock Village', true],
            ['TA187', 'Lime Village', true],
            ['TA188', 'Lipay Nation of Santa Ysabel (Previously listed as the Santa Ysabel Band of Diegueño Mission Indians of the Santa Ysabel Reservation)', true],
            ['TA189', 'Little River Band of Ottawa Indians', true],
            ['TA190', 'Little Traverse Bay Bands of Odawa Indians', true],
            ['TA191', 'Lone Pine Paiute-Shoshone Tribe', true],
            ['TA192', 'Los Coyotes Band of Cahuilla & Cupeno Indians ', true],
            ['TA193', 'Lovelock Paiute Tribe of the Lovelock Indian Colony', true],
            ['TA194', 'Lower Brule Sioux Tribe of the Lower Brule Reservation', true],
            ['TA195', 'Lower Elwha Tribal Community', true],
            ['TA196', 'Lower Sioux Indian Community in the State of Minnesota', true],
            ['TA197', 'Lummi Tribe of the Lummi Reservation', true],
            ['TA198', 'Lytton Rancheria of California', true],
            ['TA199', 'Makah Indian Tribe of the Makah Indian Reservation', true],
            ['TA200', 'Manchester Band of Pomo Indians of the Manchester Rancheria', true],
            ['TA201', 'Manley Hot Springs Village', true],
            ['TA202', 'Manokotak Village', true],
            ['TA203', 'Manzanita Band of Diegueño Mission Indians of the Manzanita Reservation', true],
            ['TA204', 'Mashantucket Pequot Tribe ', true],
            ['TA205', 'Mashpee Wampanoag Tribe', true],
            ['TA206', 'Match-e-be-nash-she-wish Band of Pottawatomi Indians of Michigan', true],
            ['TA207', 'McGrath Native Village', true],
            ['TA208', 'Mdewakanton Sioux Indians', true],
            ['TA209', 'Mechoopda Indian Tribe of Chico Rancheria', true],
            ['TA210', 'Menominee Indian Tribe of Wisconsin', true],
            ['TA211', 'Mentasta Traditional Council', true],
            ['TA212', 'Mesa Grande Band of Diegueño Mission Indians of the Mesa Grande Reservation', true],
            ['TA213', 'Mescalero Apache Tribe of the Mescalero Reservation', true],
            ['TA214', 'Metlakatla Indian Community, Annette Island Reserve', true],
            ['TA215', 'Miami Tribe of Oklahoma', true],
            ['TA216', 'Miccosukee Tribe of Indians of Florida', true],
            ['TA217', 'Middletown Rancheria of Pomo Indians of California', true],
            ['TA218', 'Minnesota Chippewa Tribe (Six component reservations: Bois Forte Band (Nett Lake);Fond du Lac Band; Grand Portage Band; Leech Lake Band; Mille Lacs Ban; White Earth Band)', true],
            ['TA219', 'Mississippi Band of Choctaw Indians', true],
            ['TA220', 'Moapa Band of Paiute Indians of the Moapa River Indian Reservation', true],
            ['TA221', 'Modoc Tribe of Oklahoma', true],
            ['TA222', 'Mohegan Tribe of Indians of Connecticut', true],
            ['TA223', 'Monacan Indian Nation', true],
            ['TA224', 'Mooretown Rancheria of Maidu Indians of California', true],
            ['TA225', 'Morongo Band of Cahuilla Mission Indians ', true],
            ['TA226', 'Muckleshoot Indian Tribe', true],
            ['TA227', 'Muscogee (Creek) Nation', true],
            ['TA228', 'Naknek Native Village', true],
            ['TA229', 'Nansemond Indian Tribe', true],
            ['TA230', 'Narragansett Indian Tribe ', true],
            ['TA231', 'Native Village of Afognak (formerly the Village of Afognak)', true],
            ['TA232', 'Native Village of Akhiok', true],
            ['TA233', 'Native Village of Akutan', true],
            ['TA234', 'Native Village of Aleknagik', true],
            ['TA235', 'Native Village of Ambler', true],
            ['TA236', 'Native Village of Atka', true],
            ['TA237', 'Native Village of Barrow Inupiat Traditional Government', true],
            ['TA238', 'Native Village of Belkofski', true],
            ['TA239', 'Native Village of Brevig Mission', true],
            ['TA240', 'Native Village of Buckland', true],
            ['TA241', 'Native Village of Cantwell', true],
            ['TA242', 'Native Village of Chenega (aka Chanega)', true],
            ['TA243', 'Native Village of Chignik Lagoon', true],
            ['TA244', 'Native Village of Chitina', true],
            ['TA245', 'Native Village of Chuathbaluk (Russian Mission, Kuskokwim)', true],
            ['TA246', 'Native Village of Council', true],
            ['TA247', 'Native Village of Deering', true],
            ['TA248', 'Native Village of Diomede (aka Inalik)', true],
            ['TA249', 'Native Village of Eagle', true],
            ['TA250', 'Native Village of Eek', true],
            ['TA251', 'Native Village of Ekuk', true],
            ['TA252', 'Native Village of Elim', true],
            ['TA253', 'Native Village of Eyak (Cordova)', true],
            ['TA254', 'Native Village of False Pass', true],
            ['TA255', 'Native Village of Fort Yukon', true],
            ['TA256', 'Native Village of Gakona', true],
            ['TA257', 'Native Village of Gambell', true],
            ['TA258', 'Native Village of Georgetown', true],
            ['TA259', 'Native Village of Goodnews Bay', true],
            ['TA260', 'Native Village of Hamilton', true],
            ['TA261', 'Native Village of Hooper Bay', true],
            ['TA262', 'Native Village of Kanatak', true],
            ['TA263', 'Native Village of Karluk', true],
            ['TA264', 'Native Village of Kiana', true],
            ['TA265', 'Native Village of Kipnuk', true],
            ['TA266', 'Native Village of Kivalina', true],
            ['TA267', 'Native Village of Kluti Kaah (aka Copper Center)', true],
            ['TA268', 'Native Village of Kobuk', true],
            ['TA269', 'Native Village of Kongiganak', true],
            ['TA270', 'Native Village of Kotzebue', true],
            ['TA271', 'Native Village of Koyuk', true],
            ['TA272', 'Native Village of Kwigillingok', true],
            ['TA273', 'Native Village of Kwinhagak (aka Quinhagak)', true],
            ['TA274', 'Native Village of Larsen Bay', true],
            ['TA275', 'Native Village of Marshall (aka Fortuna Ledge)', true],
            ['TA276', 'Native Village of Mary\'s Igloo', true],
            ['TA277', 'Native Village of Mekoryuk', true],
            ['TA278', 'Native Village of Minto', true],
            ['TA279', 'Native Village of Nanwalek (aka English Bay)', true],
            ['TA280', 'Native Village of Napaimute', true],
            ['TA281', 'Native Village of Napakiak', true],
            ['TA282', 'Native Village of Napaskiak', true],
            ['TA283', 'Native Village of Nelson Lagoon', true],
            ['TA284', 'Native Village of Nightmute', true],
            ['TA285', 'Native Village of Nikolski', true],
            ['TA286', 'Native Village of Noatak', true],
            ['TA287', 'Native Village of Nuiqsut (aka Nooiksut)', true],
            ['TA288', 'Native Village of Nunam Iqua (formerly the Native Village of Sheldon\'s Point)', true],
            ['TA289', 'Native Village of Nunapitchuk', true],
            ['TA290', 'Native Village of Ouzinkie', true],
            ['TA291', 'Native Village of Paimiut', true],
            ['TA292', 'Native Village of Perryville', true],
            ['TA293', 'Native Village of Pilot Point', true],
            ['TA294', 'Native Village of Pitka\'s Point', true],
            ['TA295', 'Native Village of Point Hope', true],
            ['TA296', 'Native Village of Point Lay', true],
            ['TA297', 'Native Village of Port Graham', true],
            ['TA298', 'Native Village of Port Heiden', true],
            ['TA299', 'Native Village of Port Lions', true],
            ['TA300', 'Native Village of Ruby', true],
            ['TA301', 'Native Village of Saint Michael', true],
            ['TA302', 'Native Village of Savoonga', true],
            ['TA303', 'Native Village of Scammon Bay', true],
            ['TA304', 'Native Village of Selawik', true],
            ['TA305', 'Native Village of Shaktoolik', true],
            ['TA306', 'Native Village of Shishmaref', true],
            ['TA307', 'Native Village of Shungnak', true],
            ['TA308', 'Native Village of Stevens', true],
            ['TA309', 'Native Village of Tanacross', true],
            ['TA310', 'Native Village of Tanana', true],
            ['TA311', 'Native Village of Tatitlek', true],
            ['TA312', 'Native Village of Tazlina', true],
            ['TA313', 'Native Village of Teller', true],
            ['TA314', 'Native Village of Tetlin', true],
            ['TA315', 'Native Village of Tuntutuliak', true],
            ['TA316', 'Native Village of Tununak', true],
            ['TA317', 'Native Village of Tyonek', true],
            ['TA318', 'Native Village of Unalakleet', true],
            ['TA319', 'Native Village of Unga', true],
            ['TA320', 'Native Village of Venetie Tribal Government (Arctic Village and Village of Venetie)', true],
            ['TA321', 'Native Village of Wales', true],
            ['TA322', 'Native Village of White Mountain', true],
            ['TA323', 'Nenana Native Association', true],
            ['TA324', 'New Koliganek Village Council', true],
            ['TA325', 'New Stuyahok Village', true],
            ['TA326', 'Newhalen Village', true],
            ['TA327', 'Newtok Village', true],
            ['TA328', 'Nez Perce Tribe', true],
            ['TA329', 'Nikolai Village', true],
            ['TA330', 'Ninilchik Village', true],
            ['TA331', 'Nisqually Indian Tribe ', true],
            ['TA332', 'Nome Eskimo Community', true],
            ['TA333', 'Nondalton Village', true],
            ['TA334', 'Nooksack Indian Tribe of Washington', true],
            ['TA335', 'Noorvik Native Community', true],
            ['TA336', 'Northern Cheyenne Tribe of the Northern Cheyenne Indian Reservation', true],
            ['TA337', 'Northfork Rancheria of Mono Indians of California', true],
            ['TA338', 'Northway Village', true],
            ['TA339', 'Northwestern Band of Shoshoni Nation ', true],
            ['TA340', 'Nottawaseppi Huron Band of the Potawatomi', true],
            ['TA341', 'Nulato Village', true],
            ['TA342', 'Nunakauyarmiut Tribe (formerly the Native Village of Toksook Bay)', true],
            ['TA343', 'Oglala Sioux Tribe (previously listed as Oglala Sioux Tribe of the Pine Ridge Reservation)', true],
            ['TA344', 'Ohkay Owingeh (formerly the Pueblo of San Juan)', true],
            ['TA345', 'Omaha Tribe of Nebraska', true],
            ['TA346', 'Oneida Nation of New York', true],
            ['TA347', 'Oneida Tribe of Indians of Wisconsin', true],
            ['TA348', 'Onondaga Nation ', true],
            ['TA349', 'Organized Village of Grayling (aka Holikachuk)', true],
            ['TA350', 'Organized Village of Kake', true],
            ['TA351', 'Organized Village of Kasaan', true],
            ['TA352', 'Organized Village of Kwethluk', true],
            ['TA353', 'Organized Village of Saxman', true],
            ['TA354', 'Orutsararmuit Native Village (aka Bethel)', true],
            ['TA355', 'Oscarville Traditional Village', true],
            ['TA356', 'Otoe-Missouria Tribe of Indians', true],
            ['TA357', 'Ottawa Tribe of Oklahoma', true],
            ['TA358', 'Paiute Indian Tribe of Utah  (Cedar Band of Paiutes, Kanosh Band of Paiutes,Koosharem Band of Paiutes, Indian Peaks Band of Paiutes, and Shivwits Band of Paiutes)', true],
            ['TA359', 'Paiute-Shoshone Tribe of the Fallon Reservation and Colony', true],
            ['TA360', 'Pala Band of Luiseño Mission Indians of the Pala Reservation', true],
            ['TA361', 'Pamunkey Indian Tribe', true],
            ['TA362', 'Paskenta Band of Nomlaki Indians of California', true],
            ['TA363', 'Passamaquoddy Tribe ', true],
            ['TA364', 'Pauloff Harbor Village', true],
            ['TA365', 'Pauma Band of Luiseño Mission Indians of the Pauma & Yuima Reservation', true],
            ['TA366', 'Pawnee Nation of Oklahoma', true],
            ['TA367', 'Pechanga Band of Luiseño Mission Indians of the Pechanga Reservation', true],
            ['TA368', 'Pedro Bay Village', true],
            ['TA369', 'Penobscot Nation', true],
            ['TA370', 'Peoria Tribe of Indians of Oklahoma', true],
            ['TA371', 'Petersburg Indian Association', true],
            ['TA372', 'Picayune Rancheria of Chukchansi Indians of California', true],
            ['TA373', 'Pilot Station Traditional Village', true],
            ['TA374', 'Pinoleville Pomo Nation (formerly the Pinoleville Rancheria of Pomo Indians of California)', true],
            ['TA375', 'Pit River Tribe (includes XL Ranch, Big Bend, Likely, Lookout, Montgomery Creek and Roaring Creek Rancherias)', true],
            ['TA376', 'Platinum Traditional Village', true],
            ['TA377', 'Poarch Band of Creeks', true],
            ['TA378', 'Pokagon Band of Potawatomi Indians (Michigan and Indiana)', true],
            ['TA379', 'Ponca Tribe of Indians of Oklahoma', true],
            ['TA380', 'Ponca Tribe of Nebraska', true],
            ['TA381', 'Port Gamble S\'Klallam Tribe ', true],
            ['TA382', 'Portage Creek Village (aka Ohgsenakale)', true],
            ['TA383', 'Potter Valley Tribe (formerly the Potter Valley Rancheria of Pomo Indians of California)', true],
            ['TA384', 'Prairie Band Potawatomi Nation', true],
            ['TA385', 'Prairie Island Indian Community in the State of Minnesota', true],
            ['TA386', 'Pribilof Islands Aleut Communities of St. Paul & St. George Islands', true],
            ['TA387', 'Pueblo of Acoma', true],
            ['TA388', 'Pueblo of Cochiti', true],
            ['TA389', 'Pueblo of Isleta', true],
            ['TA390', 'Pueblo of Jemez', true],
            ['TA391', 'Pueblo of Laguna', true],
            ['TA392', 'Pueblo of Nambe', true],
            ['TA393', 'Pueblo of Picuris', true],
            ['TA394', 'Pueblo of Pojoaque', true],
            ['TA395', 'Pueblo of San Felipe', true],
            ['TA396', 'Pueblo of San Ildefonso', true],
            ['TA397', 'Pueblo of Sandia', true],
            ['TA398', 'Pueblo of Santa Ana', true],
            ['TA399', 'Pueblo of Santa Clara', true],
            ['TA400', 'Pueblo of Taos', true],
            ['TA401', 'Pueblo of Tesuque', true],
            ['TA402', 'Pueblo of Zia', true],
            ['TA403', 'Puyallup Tribe of the Puyallup Reservation', true],
            ['TA404', 'Pyramid Lake Paiute Tribe of the Pyramid Lake Reservation', true],
            ['TA405', 'Qagan Tayagungin Tribe of Sand Point Village', true],
            ['TA406', 'Qawalangin Tribe of Unalaska', true],
            ['TA407', 'Quapaw Tribe of Indians', true],
            ['TA408', 'Quartz Valley Indian Community of the Quartz Valley Reservation of California', true],
            ['TA409', 'Quileute Tribe of the Quileute Reservation', true],
            ['TA410', 'Quinault Indian Nation', true],
            ['TA411', 'Ramona Band of Cahuilla', true],
            ['TA412', 'Rampart Village', true],
            ['TA413', 'Rappahannock Tribe, Inc.', true],
            ['TA414', 'Red Cliff Band of Lake Superior Chippewa Indians of Wisconsin', true],
            ['TA415', 'Red Lake Band of Chippewa Indians', true],
            ['TA416', 'Redding Rancheria', true],
            ['TA417', 'Redwood Valley or Little River Band of Pomo Indians of the Redwood Valley Rancheria California', true],
            ['TA418', 'Reno-Sparks Indian Colony', true],
            ['TA419', 'Resighini Rancheria', true],
            ['TA420', 'Rincon Band of Luiseño Mission Indians of the Rincon Reservation', true],
            ['TA421', 'Robinson Rancheria', true],
            ['TA422', 'Rosebud Sioux Tribe of the Rosebud Indian Reservation', true],
            ['TA423', 'Round Valley Indian Tribes, Round Valley Reservation', true],
            ['TA424', 'Sac & Fox Nation', true],
            ['TA425', 'Sac & Fox Nation of Missouri (Kansas and Nebraska)', true],
            ['TA426', 'Sac & Fox Tribe of the Mississippi in Iowa', true],
            ['TA427', 'Saginaw Chippewa Indian Tribe of Michigan', true],
            ['TA428', 'Saint George Island (See Pribilof Islands Aleut Communities of St. Paul & St. George Islands)', true],
            ['TA429', 'Saint Paul Island (See Pribilof Islands Aleut Communities of St. Paul & St. George Islands)', true],
            ['TA430', 'Saint Regis Mohawk Tribe (formerly the St. Regis Band of Mohawk Indians of New York)', true],
            ['TA431', 'Samish Indian Nation', true],
            ['TA432', 'San Manual Band of Serrano Mission Indians of the San Maual Reservation', true],
            ['TA433', 'San Pasqual Band of Diegueño Mission Indians of California', true],
            ['TA434', 'Santa Rosa Band of Cahuilla Indians (formerly the Santa Rosa Band of Cahuilla Mission Indians of the Santa Rosa Reservation)', true],
            ['TA435', 'Santa Rosa Indian Community of the Santa Rosa Rancheria', true],
            ['TA436', 'Santa Ynez Band of Chumash Mission Indians of the Santa Ynez Reservation', true],
            ['TA437', 'Santee Sioux Nation', true],
            ['TA438', 'Sauk-Suiattle Indian Tribe of Washington', true],
            ['TA439', 'Sault Ste. Marie Tribe of Chippewa Indians of Michigan', true],
            ['TA440', 'Scotts Valley Band of Pomo Indians of California', true],
            ['TA441', 'Seldovia Village Tribe', true],
            ['TA442', 'Seminole Nation of Oklahoma', true],
            ['TA443', 'Seminole Tribe of Florida (Dania, Big Cypress, Brighton, Hollywood and Tampa Reservations)', true],
            ['TA444', 'Seneca Nation of Indians', true],
            ['TA445', 'Seneca-Cayuga Nation', true],
            ['TA446', 'Shageluk Native Village', true],
            ['TA447', 'Shakopee Mdewakanton Sioux Community of Minnesota', true],
            ['TA448', 'Shawnee Tribe', true],
            ['TA449', 'Shawnee Tribe - The Chickasaw Nation', true],
            ['TA450', 'Shawnee Tribe - The Choctaw Nation of Oklahoma', true],
            ['TA451', 'Shawnee Tribe - The Osage Nation', true],
            ['TA452', 'Sheep Ranch Rancheria of Me-Wuk Indians', true],
            ['TA453', 'Sherwood Valley Rancheria of Pomo Indians of California', true],
            ['TA454', 'Shingle Springs Band of Miwok Indians, Shingle Springs Rancheria (Verona Tract)', true],
            ['TA455', 'Shinnecock Indian Nation', true],
            ['TA456', 'Shoalwater Bay IndianTribe of the Shoalwater Bay Indian Reservation', true],
            ['TA457', 'Shoshone Tribe of the Wind River Reservation', true],
            ['TA458', 'Shoshone-Bannock Tribes of the Fort Hall Reservation of Idaho', true],
            ['TA459', 'Shoshone-Paiute Tribes of the Duck Valley Reservation', true],
            ['TA460', 'Sisseton-Wahpeton Oyate of the Lake Traverse Reservation', true],
            ['TA461', 'Sitka Tribe of Alaska', true],
            ['TA462', 'Skagway Village', true],
            ['TA463', 'Skokomish Indian Tribe ', true],
            ['TA464', 'Skull Valley Band of Goshute Indians of Utah', true],
            ['TA465', 'Snoqualmie Indian Tribe', true],
            ['TA466', 'Soboba Band of Luiseño Indians', true],
            ['TA467', 'Sokaogon Chippewa Community', true],
            ['TA468', 'South Naknek Village', true],
            ['TA469', 'Southern Ute Indian Tribe of the Southern Ute Reservation', true],
            ['TA470', 'Spirit Lake Tribe', true],
            ['TA471', 'Spokane Tribe of the Spokane Reservation', true],
            ['TA472', 'Squaxin Island Tribe of the Squaxin Island Reservation', true],
            ['TA473', 'St. Croix Chippewa Indians of Wisconsin', true],
            ['TA474', 'Standing Rock Sioux Tribe (North Dakota and South Dakota)', true],
            ['TA475', 'Stebbins Community Association', true],
            ['TA476', 'Stillaguamish Tribe of Indians of Washington', true],
            ['TA477', 'Stockbridge Munsee Community', true],
            ['TA478', 'Summit Lake Paiute Tribe of Nevada', true],
            ['TA479', 'Sun\'aq Tribe of Kodiak (formerly the Shoonaq\' Tribe of Kodiak)', true],
            ['TA480', 'Suquamish Indian Tribe of the Port Madison Reservation', true],
            ['TA481', 'Susanville Indian Rancheria', true],
            ['TA482', 'Swinomish Indian Tribal Community', true],
            ['TA483', 'Sycuan Band of the Kumeyaay Nation (formerly the Sycuan Band of Diegueno Mission Indians of California)', true],
            ['TA484', 'Table Mountain Rancheria of California', true],
            ['TA485', 'Takotna Village', true],
            ['TA486', 'Tangirnaq Native Village (formerly Lesnoi Village)', true],
            ['TA487', 'Tejon Indian Tribe', true],
            ['TA488', 'Telida Village', true],
            ['TA489', 'Te-Moak Tribe of Western Shoshone Indians of Nevada (Four constituent bands: Battle Mountain Band; Elko Band; South Fork Band; Wells Band)', true],
            ['TA490', 'Thlopthlocco Tribal Town', true],
            ['TA491', 'Three Affiliated Tribes of the Fort Berthold Reservation', true],
            ['TA492', 'Tolowa Dee-ni\' Nation', true],
            ['TA493', 'Tonawanda Band of Seneca ', true],
            ['TA494', 'Tonkawa Tribe of Indians of Oklahoma', true],
            ['TA495', 'Torres-Martinez Desert Cahuilla Indians ', true],
            ['TA496', 'Traditional Village of Togiak', true],
            ['TA497', 'Tulalip Tribes of Washington', true],
            ['TA498', 'Tule River Indian Tribe of the Tule River Reservation', true],
            ['TA499', 'Tuluksak Native Community', true],
            ['TA500', 'Tunica-Biloxi Indian Tribe of Louisiana', true],
            ['TA501', 'Tuolumne Band of Me-Wuk Indians of the Tuolumne Rancheria of California', true],
            ['TA502', 'Turtle Mountain Band of Chippewa Indians of North Dakota', true],
            ['TA503', 'Tuscarora Nation of New York', true],
            ['TA504', 'Twenty-Nine Palms Band of Mission Indians of California', true],
            ['TA505', 'Twin Hills Village', true],
            ['TA506', 'Ugashik Village', true],
            ['TA507', 'Umkumiute Native Village', true],
            ['TA508', 'United Auburn Indian Community of the Auburn Rancheria of California', true],
            ['TA509', 'United Keetoowah Band of Cherokee Indians in Oklahoma', true],
            ['TA510', 'Upper Lake Band of Pomo Indians', true],
            ['TA511', 'Upper Mattaponi Tribe', true],
            ['TA512', 'Upper Sioux Community', true],
            ['TA513', 'Upper Skagit Indian Tribe of Washington', true],
            ['TA514', 'Ute Indian Tribe of the Uintah and Ouray Reservation', true],
            ['TA515', 'Ute Mountain Tribe of the Ute Mountain Reservation (Colorado, New Mexico and Utah)', true],
            ['TA516', 'Ute Mountain Ute Tribe (Colorado, New Mexico and Utah)', true],
            ['TA517', 'Utu Utu Gwaitu Paiute Tribe of the Benton Paiute Reservation', true],
            ['TA518', 'Village of Alakanuk', true],
            ['TA519', 'Village of Anaktuvuk Pass', true],
            ['TA520', 'Village of Aniak', true],
            ['TA521', 'Village of Atmautluak', true],
            ['TA522', 'Village of Bill Moore\'s Slough', true],
            ['TA523', 'Village of Chefornak', true],
            ['TA524', 'Village of Clarks Point', true],
            ['TA525', 'Village of Crooked Creek', true],
            ['TA526', 'Village of Dot Lake', true],
            ['TA527', 'Village of Iliamna', true],
            ['TA528', 'Village of Kalskag', true],
            ['TA529', 'Village of Kaltag', true],
            ['TA530', 'Village of Kotlik', true],
            ['TA531', 'Village of Lower Kalskag', true],
            ['TA532', 'Village of Ohogamiut', true],
            ['TA533', 'Village of Old Harbor', true],
            ['TA534', 'Village of Red Devil', true],
            ['TA535', 'Village of Salamatoff', true],
            ['TA536', 'Village of Sleetmute', true],
            ['TA537', 'Village of Solomon', true],
            ['TA538', 'Village of Stony River', true],
            ['TA539', 'Village of Venetie (See Native Village of Venetie Tribal Government)', true],
            ['TA540', 'Village of Wainwright', true],
            ['TA541', 'Walker River Paiute Tribe of the Walker River Reservation', true],
            ['TA542', 'Wampanoag Tribe of Gay Head (Aquinnah) of Massachusetts', true],
            ['TA543', 'Washoe Tribe (Carson Colony, Dresslerville Colony, Woodfords Community, Stewart Community and Washoe Ranches) (California and Nevada)', true],
            ['TA544', 'Washoe Tribe (Nevada and California) (Carson Colony, Dresslerville Colony, Woodfords Community, Stewart Community and Washoe Ranches)', true],
            ['TA545', 'Wichita and Affiliated Tribes (Wichita, Keechi, Waco and Tawakonie)', true],
            ['TA546', 'Wilton Rancheria', true],
            ['TA547', 'Winnebago Tribe of Nebraska', true],
            ['TA548', 'Winnemucca Indian Colony of Nevada', true],
            ['TA549', 'Wiyot Tribe (formerly the Table Bluff Reservation-Wiyot Tribe)', true],
            ['TA550', 'Wrangell Cooperative Association', true],
            ['TA551', 'Wyandotte Nation', true],
            ['TA552', 'Yakutat Tlingit Tribe', true],
            ['TA553', 'Yankton Sioux Tribe of South Dakota', true],
            ['TA554', 'Yerington Paiute Tribe of the Yerington Colony & Campbell Ranch', true],
            ['TA555', 'Yocha Dehe Wintun Nation ', true],
            ['TA556', 'Yomba Shoshone Tribe of the Yomba Reservation', true],
            ['TA557', 'Ysleta Del Sur Pueblo ', true],
            ['TA558', 'Yupiit of Andreafski', true],
            ['TA559', 'Yurok Tribe of the Yurok Reservation', true],
            ['TA560', 'Zuni Tribe of the Zuni Reservation', true],
        ],
    ];

    // Use Case version 12.0, Table 01
    // The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state.  National Education Data Model (NEDM): Agency Type
    $AzSIS_SQL_Tables['PossibleEducationOrganizationCategories'] = [
        'columns' => [
            'EducationOrganizationCategory VARCHAR(50) NOT NULL',
            'PRIMARY KEY (EducationOrganizationCategory)',
            'CHECK (EducationOrganizationCategory<>"")'
        ],
        'values' => [
            ['Education Organization Network'],
            ['Education Service Center'],
            ['Local Education Agency'],
            ['School'],
            ['State Education Agency'],
        ],
    ];

    // Use Case version 12.0, Table 02
    // The instructional categorization of the school (e.g., Regular, Alternative, etc.)
    $AzSIS_SQL_Tables['PossibleSchoolTypes'] = [
        'columns' => [
            'SchoolType VARCHAR(50) NOT NULL',
            'AdeSchoolType VARCHAR(50) NOT NULL',
            'PRIMARY KEY (SchoolType)',
            'CHECK (SchoolType<>"")',
            'CHECK (AdeSchoolType<>"")'
        ],
        'values' => [
            ['Alternative', 'Alternative'],
            ['Career and Technical Education', 'Career and Technical Education'],
            ['Public', 'Regular'],
            ['Private', 'Regular'],
            ['Homeschool', 'Regular'],
            ['Public Charter', 'Regular'],
            ['Special Education', 'Special Education'],
        ],
    ];

    // Use Case version 12.0, Table 03
    // A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school.
    $AzSIS_SQL_Tables['PossibleCharterStatuses'] = [
        'columns' => [
            'CharterStatus VARCHAR(40) NOT NULL',
            'PRIMARY KEY (CharterStatus)',
            'CHECK (CharterStatus<>"")'
        ],
        'values' => [
            ['College/University Charter'],
            ['Not a Charter School'],
            ['Open Enrollment'],
            ['School Charter'],
        ],
    ];

    // Use Case version 12.0, Table 04
    // Key for LEA Category
    $AzSIS_SQL_Tables['PossibleLocalEducationAgencyCategories'] = [
        'columns' => [
            'LocalEducationAgencyCategory VARCHAR(50) NOT NULL',
            'PRIMARY KEY (LocalEducationAgencyCategory)',
            'LocalEducationAgencyCategoryIsFromAdeConnect BOOLEAN NOT NULL DEFAULT FALSE',
            'CHECK (LocalEducationAgencyCategory<>"")'
        ],
        'values' => [
            ['Federal Agency', 1],
            ['Independent Charter District', 1],
            ['Other education agencies', 1],
            ['Regional Education Service Agency', 1],
            ['Regular Local', 1],
            ['State Agency', 1],
            ['Private District', 0],
        ],
    ];

    // Use Case version 12.0, Table 05
    // Indicates the type of Calendar.
    $AzSIS_SQL_Tables['PossibleCalendarTypes'] = [
        'columns' => [
            'CalendarTypeCode VARCHAR(20) NOT NULL',
            'CalendarType VARCHAR(75) NOT NULL',
            'PRIMARY KEY (CalendarTypeCode)',
            'UNIQUE (CalendarType)',
            'CHECK (CalendarTypeCode<>"")',
            'CHECK (CalendarType<>"")'
        ],
        'values' => [
            ['5DayAllGrades', '5-Day calendar for all grades'],
            ['4DayAllGrades', '4-Day calendar for all grades'],
            ['4DayPSKG', '4-Day calendar for grades PS or KG'],
            ['3DayPSKG', '3-Day calendar for grades PS or KG'],
            ['3DayCTED', '3-Day calendar for grades 9, 10, 11, or 12'],
            ['2DayCTED', '2-Day calendar for grades 9, 10, 11, or 12'],
            ['1DayCTED', '1-Day calendar for grades 9, 10, 11, or 12'],
        ],
    ];

    // Use Case version 12.0, Table 06
    // The type of scheduled or unscheduled event for the day. For example: Instructional day Teacher only day Holiday Make-up day Weather day Student late arrival/early dismissal.
    $AzSIS_SQL_Tables['PossibleCalendarEvents'] = [
        'columns' => [
            'CalendarEvent VARCHAR(75) NOT NULL',
            'CalendarEventIsInstructional BOOLEAN NOT NULL',
            'AdeCalendarEventCode VARCHAR(75) NULL',
            'PRIMARY KEY (CalendarEvent)',
            'CHECK (CalendarEvent<>"")',
            'CHECK (AdeCalendarEventCode IS NULL OR AdeCalendarEventCode<>"")'
        ],
        'values' => [
            ['Christmas Day', 0, 'Christmas Day'],
            ['Columbus Day', 1, 'Columbus Day'],
            ['Emergency day, Non-Instructional', 0, 'Emergency day, Non-Instructional'],
            ['Emergency day,Instructional', 1, 'Emergency day,Instructional'],
            ['Fall Break', 0, 'Fall Break'],
            ['Independence Day', 0, 'Independence Day'],
            ['Instructional day', 1, 'Instructional day'],
            ['Labor Day', 0, 'Labor Day'],
            ['Make-up day,Instructional', 1, 'Make-up day,Instructional'],
            ['Martin Luther King Jr. Day', 0, 'Martin Luther King Day'],
            ['Memorial Day', 0, 'Memorial Day'],
            ['New Year’s Day', 0, 'New Year\'s Day'],
            ['Other Holiday', 0, 'Other Holiday'],
            ['Other Non Session Day', 0, 'Other Non Session Day'],
            ['President’s Day', 1, 'President\'s Day'],
            ['Spring Break', 0, 'Spring Break'],
            ['Student late arrival/early dismissal', 1, 'Student late arrival/early dismissal'],
            ['Student Refusal to Attend 15-806,Non-Instructional', 0, 'Student Refusal to Attend 15-806,Non-Instructional'],
            ['Student Refusal to Attend 15-806,Instructional', 1, 'Student Refusal to Attend 15-806,Instructional'],
            ['Teacher only day', 0, 'Teacher only day'],
            ['Teacher Strike,Non-Instructional', 0, 'Teacher Strike,Non-Instructional'],
            ['Thanksgiving Day', 0, 'Thanksgiving Day'],
            ['Veterans Day', 0, 'Veterans Day'],
            ['Weather day, Non-Instructional', 0, 'Weather day,Non-Instructional'],
            ['Weather day, Instructional', 1, 'Weather day,Instructional'],
            ['Weekend day', 0, 'Weekend day'],
            ['Winter Break', 0, 'Winter Break'],

            ['Easter Break', 0, 'Other Non Session Day'],
            ['Rodeo Break', 0, 'Other Non Session Day'],
            ['Summer Break', 0, null],
            ['Thanksgiving Break', 0, 'Other Non Session Day'],
            ['Veterans Day (observed)', 0, 'Veterans Day'],
        ],
    ];

    // Use Case version 12.0, Table 07
    // The term for the session during the school year.
    $AzSIS_SQL_Tables['PossibleTerms'] = [
        'columns' => [
            'TermName VARCHAR(25) NOT NULL',
            'TermDescription VARCHAR(25) NOT NULL',
            'TermAbbreviation VARCHAR(10) NOT NULL',
            'TermSortNumber DECIMAL(8,2) NOT NULL',
            'PRIMARY KEY (TermName)',
            'UNIQUE (TermDescription)',
            'UNIQUE (TermAbbreviation)',
            'UNIQUE (TermSortNumber)',
            'CHECK (TermName<>"")',
            'CHECK (TermDescription<>"")',
            'CHECK (TermAbbreviation<>"")'
        ],
        'values' => [
            ['Fall Semester', 'Fall Semester', 'S1', 1.1],
            ['First Quarter', 'First Quarter', 'Q1', 0.1],
            ['First Trimester', 'First Trimester', 'T1', 2.1],
            ['Fourth Quarter', 'Fourth Quarter', 'Q4', 0.4],
            ['MiniTerm', 'MiniTerm', 'MT', 6000.00],
            ['Other', 'Other', 'O', 9999],
            ['Second Quarter', 'Second Quarter', 'Q2', 0.2],
            ['Second Trimester', 'Second Trimester', 'T2', 2.2],
            ['Spring Semester', 'Spring Semester', 'S2', 1.2],
            ['Summer Semester', 'Summer Semester', 'S3', 1.3],
            ['Third Quarter', 'Third Quarter', 'Q3', 0.3],
            ['Third Trimester', 'Third Trimester', 'T3', 2.3],
            ['Year Round', 'Year Round', 'YR', 8000],
            ['First Quinmester', 'First Quinmester', 'Qi1', 3.1],
            ['Second Quinmester', 'Second Quinmester', 'Qi2', 3.2],
            ['Third Quinmester', 'Third Quinmester', 'Qi3', 3.3],
            ['Fourth Quinmester', 'Fourth Quinmester', 'Qi4', 3.4],
            ['Fifth Quinmester', 'Fifth Quinmester', 'Qi5', 3.5],
            ['Full School Year', 'Full School Year', 'FSY', 8001],
            ['Long Session', 'Long Session', 'LS', 7000],
            ['MiniTerm01', 'Mini-term 01', 'MT01', 6000.01],
            ['MiniTerm02', 'Mini-term 02', 'MT02', 6000.02],
            ['MiniTerm03', 'Mini-term 03', 'MT03', 6000.03],
            ['MiniTerm04', 'Mini-term 04', 'MT04', 6000.04],
            ['MiniTerm05', 'Mini-term 05', 'MT05', 6000.05],
            ['MiniTerm06', 'Mini-term 06', 'MT06', 6000.06],
            ['MiniTerm07', 'Mini-term 07', 'MT07', 6000.07],
            ['MiniTerm08', 'Mini-term 08', 'MT08', 6000.08],
            ['MiniTerm09', 'Mini-term 09', 'MT09', 6000.09],
            ['MiniTerm10', 'Mini-term 10', 'MT10', 6000.10],
            ['MiniTerm11', 'Mini-term 11', 'MT11', 6000.11],
            ['MiniTerm12', 'Mini-term 12', 'MT12', 6000.12],
            ['MiniTerm13', 'Mini-term 13', 'MT13', 6000.13],
            ['MiniTerm14', 'Mini-term 14', 'MT14', 6000.14],
            ['MiniTerm15', 'Mini-term 15', 'MT15', 6000.15],
            ['MiniTerm16', 'Mini-term 16', 'MT16', 6000.16],
        ],
    ];

    // Use Case version 12.0, Table 08
    // Submitted for courses that end with Assessment testing
    $AzSIS_SQL_Tables['PossibleEndOfCourseAssessments'] = [
        'columns' => [
            'EndOfCourseAssessmentCode VARCHAR(10) NOT NULL',
            'EndOfCourseAssessment VARCHAR(25) NOT NULL',
            'PRIMARY KEY (EndOfCourseAssessmentCode)',
            'UNIQUE (EndOfCourseAssessment)',
            'CHECK (EndOfCourseAssessmentCode<>"")',
            'CHECK (EndOfCourseAssessment<>"")'
        ],
        'values' => [
            ['S1', 'Science HS'],
        ],
    ];

    // Use Case version 12.0, Table 09
    // The setting in which a child receives education and related services; for example:  Center-based instruction  Home-based instruction  Hospital class  Mainstream  Residential care and treatment facility
    $AzSIS_SQL_Tables['PossibleEducationalEnvironments'] = [
        'columns' => [
            'EducationalEnvironmentCode CHAR(2) NOT NULL',
            'EducationalEnvironment VARCHAR(50) NOT NULL',
            'PRIMARY KEY (EducationalEnvironmentCode)',
            'UNIQUE (EducationalEnvironment)',
            'CHECK (EducationalEnvironmentCode<>"")',
            'CHECK (EducationalEnvironment<>"")'
        ],
        'values' => [
            ['RC', 'Classroom'],
            ['CB', 'Computer Based or Self Paced Course'],
            ['RR', 'Resource room'],
            ['SC', 'Self-contained (Special Education)'],
            ['IS', 'Self-study'],
            ['SI', 'Structured English Immersion'],
            ['VI', 'Virtual'],
        ],
    ];

    // Use Case version 12.0, Table 10
    // The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session.
    $AzSIS_SQL_Tables['PossibleGradeLevels'] = [
        'columns' => [
            'GradeLevelCode VARCHAR(2) NOT NULL',
            'GradeLevel VARCHAR(25) NOT NULL',
            'GradeLevelSortNumber TINYINT NOT NULL',
            'PRIMARY KEY (GradeLevelCode)',
            'UNIQUE (GradeLevel)',
            'UNIQUE (GradeLevelSortNumber)',
            'CHECK (GradeLevelCode<>"")',
            'CHECK (GradeLevel<>"")'
        ],
        'values' => [
            ['PS', 'Preschool', -1],
            ['UE', 'Ungraded Elementary', -2],
            ['KG', 'Kindergarten', 0],
            ['1', 'First Grade', 1],
            ['2', 'Second Grade', 2],
            ['3', 'Third Grade', 3],
            ['4', 'Fourth Grade', 4],
            ['5', 'Fifth Grade', 5],
            ['6', 'Sixth Grade', 6],
            ['7', 'Seventh Grade', 7],
            ['8', 'Eighth Grade', 8],
            ['9', 'Ninth Grade', 9],
            ['10', 'Tenth Grade', 10],
            ['11', 'Eleventh Grade', 11],
            ['12', 'Twelfth Grade', 12],
        ],
    ];

    // Use Case version 12.0, Table 11
    // Key for ClassroomPositionDescriptor.
    $AzSIS_SQL_Tables['PossibleClassroomPositions'] = [
        'columns' => [
            'ClassroomPositionCode CHAR(1) NOT NULL',
            'ClassroomPosition VARCHAR(50) NOT NULL',
            'PRIMARY KEY (ClassroomPositionCode)',
            'UNIQUE (ClassroomPosition)',
            'CHECK (ClassroomPositionCode<>"")',
            'CHECK (ClassroomPosition<>"")'
        ],
        'values' => [
            ['1', 'Lead Team Teacher'],
            ['2', 'Assisting Teacher'],
            ['A', 'Absent Teacher of Record'],
            ['C', 'Co-Teacher'],
            ['L', 'Student Teacher'],
            ['P', 'Course Proctor'],
            ['R', 'Regular Class'],
            ['S', 'Special Education Consultant'],
            ['U', 'Long Term Substitute'],
        ],
    ];

    // Use Case version 12.0, Table 12
    // An unordered collection of courseLevelCharacteristics. The type of specific program or designation with which the course is associated (e.g., AP, IB, Dual Credit, CTE).
    $AzSIS_SQL_Tables['PossibleCourseLevels'] = [
        'columns' => [
            'CourseLevel VARCHAR(50) NOT NULL',
            'PRIMARY KEY (CourseLevel)',
            'CHECK (CourseLevel<>"")'
        ],
        'values' => [
            ['Accepted as high school equivalent'],
            ['Advanced'],
            ['Advanced Placement'],
            ['Basic'],
            ['Career and Technical Education'],
            ['College-level'],
            ['Dual Credit'],
            ['General'],
            ['Gifted and Talented'],
            ['Graduation Credit'],
            ['Honors'],
            ['Remedial'],
            ['Untracked'],
        ],
    ];

    // Use Case version 12.0, Table 13
    // The biological sex of the student.
    $AzSIS_SQL_Tables['PossibleSexes'] = [
        'columns' => [
            'Sex VARCHAR(50) NOT NULL',
            'PRIMARY KEY (Sex)',
            'CHECK (Sex<>"")'
        ],
        'values' => [
            ['Male'],
            ['Female'],
        ],
    ];

    // Use Case version 12.0, Table 14
    // Key for StudentIdentificationSystem
    $AzSIS_SQL_Tables['PossibleStudentIdentificationSystems'] = [
        'columns' => [
            'StudentIdentificationSystem VARCHAR(20) NOT NULL',
            'PRIMARY KEY (StudentIdentificationSystem)',
            'CHECK (StudentIdentificationSystem<>"")'
        ],
        'values' => [
            ['District'],
        ],
    ];

    // Use Case version 12.0, Table 15
    // Possible Staff Classifications
    $AzSIS_SQL_Tables['PossibleStaffClassifications'] = [
        'columns' => [
            'StaffClassification VARCHAR(50) NOT NULL',
            'PRIMARY KEY (StaffClassification)',
            'CHECK (StaffClassification<>"")'
        ],
        'values' => [
            ['Assistant Principal'],
            ['Assistant Superintendent'],
            ['Counselor'],
            ['Instructional Aide'],
            ['Instructional Coordinator'],
            ['LEA Administrator'],
            ['LEA Specialist'],
            ['LEA System Administrator'],
            ['Librarians/Media Specialists'],
            ['Operational Support'],
            ['Other'],
            ['Principal'],
            ['School Administrator'],
            ['School Leader'],
            ['School Specialist'],
            ['State Administrator'],
            ['Substitute Teacher'],
            ['Superintendent'],
            ['Support Services Staff'],
            ['Teacher'],
        ],
    ];

    // Use Case version 12.0, Table 16
    // Possible States
    $AzSIS_SQL_Tables['PossibleStates'] = [
        'columns' => [
            'StateAbbreviation VARCHAR(15) NOT NULL',
            'State VARCHAR(75) NOT NULL',
            'PRIMARY KEY (StateAbbreviation)',
            'UNIQUE (State)',
            'CHECK (StateAbbreviation<>"")',
            'CHECK (State<>"")'
        ],
        'values' => [
            ['AA', 'Armed Forces the Americas (except Canada)'],
            ['AE', 'Armed Forces Europe, Africa, Canada, and  Middle East'],
            ['AK', 'Alaska'],
            ['AL', 'Alabama'],
            ['AP', 'Armed Forces Pacific'],
            ['AR', 'Arkansas'],
            ['AS', 'American Samoa'],
            ['AZ', 'Arizona'],
            ['CA', 'California'],
            ['CO', 'Colorado'],
            ['CT', 'Connecticut'],
            ['DC', 'District of Columbia'],
            ['DE', 'Delaware'],
            ['FL', 'Florida'],
            ['FM', 'Federated States of Micronesia'],
            ['GA', 'Georgia'],
            ['GU', 'Guam'],
            ['HI', 'Hawaii'],
            ['IA', 'Iowa'],
            ['ID', 'Idaho'],
            ['IL', 'Illinois'],
            ['IN', 'Indiana'],
            ['KS', 'Kansas'],
            ['KY', 'Kentucky'],
            ['LA', 'Louisiana'],
            ['MA', 'Massachusetts'],
            ['MD', 'Maryland'],
            ['ME', 'Maine'],
            ['MH', 'Marshall Islands'],
            ['MI', 'Michigan'],
            ['MN', 'Minnesota'],
            ['MO', 'Missouri'],
            ['MP', 'Northern Mariana Islands'],
            ['MS', 'Mississippi'],
            ['MT', 'Montana'],
            ['NC', 'North Carolina'],
            ['ND', 'North Dakota'],
            ['NE', 'Nebraska'],
            ['NH', 'New Hampshire'],
            ['NJ', 'New Jersey'],
            ['NM', 'New Mexico'],
            ['NV', 'Nevada'],
            ['NY', 'New York'],
            ['OH', 'Ohio'],
            ['OK', 'Oklahoma'],
            ['OR', 'Oregon'],
            ['PA', 'Pennsylvania'],
            ['PR', 'Puerto Rico'],
            ['PW', 'Palau'],
            ['RI', 'Rhode Island'],
            ['SC', 'South Carolina'],
            ['SD', 'South Dakota'],
            ['TN', 'Tennessee'],
            ['TX', 'Texas'],
            ['TT', 'Trust Territory'],
            ['Unknown', 'Unknown'],
            ['UM', 'U.S. Minor Outlying Islands'],
            ['UT', 'Utah'],
            ['VA', 'Virginia'],
            ['VI', 'Virgin Islands'],
            ['VT', 'Vermont'],
            ['WA', 'Washington'],
            ['WI', 'Wisconsin'],
            ['WV', 'West Virginia'],
            ['WY', 'Wyoming'],
        ],
    ];

    // Use Case version 12.0, Table 17
    // The name of the country in which an individual was born. Note: A list of countries & codes is maintained and updated by the International Organization for Standardization (ISO) as ISO 3166 (http://www.iso.org/iso/country_codes.htm)  National Education Data Model (NEDM): Country Of Birth Code
    $AzSIS_SQL_Tables['PossibleCountries'] = [
        'columns' => [
            'CountryCode CHAR(2) NOT NULL',
            'Country VARCHAR(75) NOT NULL',
            'PRIMARY KEY (CountryCode)',
            'UNIQUE (Country)',
            'CHECK (CountryCode<>"")',
            'CHECK (Country<>"")'
        ],
        'values' => [
            ['AD', 'Andorra'],
            ['AE', 'United Arab Emirates'],
            ['AF', 'Afghanistan'],
            ['AG', 'Antigua and Barbuda'],
            ['AI', 'Anguilla'],
            ['AL', 'Albania'],
            ['AM', 'Armenia'],
            ['AO', 'Angola'],
            ['AQ', 'Antarctica'],
            ['AR', 'Argentina'],
            ['AS', 'American Samoa'],
            ['AT', 'Austria'],
            ['AU', 'Australia'],
            ['AW', 'Aruba'],
            ['AX', 'Åland Islands'],
            ['AZ', 'Azerbaijan'],
            ['BA', 'Bosnia and Herzegovina'],
            ['BB', 'Barbados'],
            ['BD', 'Bangladesh'],
            ['BE', 'Belgium'],
            ['BF', 'Burkina Faso'],
            ['BG', 'Bulgaria'],
            ['BH', 'Bahrain'],
            ['BI', 'Burundi'],
            ['BJ', 'Benin'],
            ['BL', 'Saint Barthélemy'],
            ['BM', 'Bermuda'],
            ['BN', 'Brunei Darussalam'],
            ['BO', 'Bolivia, Plurinational State of'],
            ['BQ', 'Bonaire, Sint Eustatius and Saba'],
            ['BR', 'Brazil'],
            ['BS', 'Bahamas'],
            ['BT', 'Bhutan'],
            ['BV', 'Bouvet Island'],
            ['BW', 'Botswana'],
            ['BY', 'Belarus'],
            ['BZ', 'Belize'],
            ['CA', 'Canada'],
            ['CC', 'Cocos (Keeling) Islands'],
            ['CD', 'Congo, the Democratic Republic of the'],
            ['CF', 'Central African Republic'],
            ['CG', 'Congo'],
            ['CH', 'Switzerland'],
            ['CI', 'Côte d\'Ivoire'],
            ['CK', 'Cook Islands'],
            ['CL', 'Chile'],
            ['CM', 'Cameroon'],
            ['CN', 'China'],
            ['CO', 'Colombia'],
            ['CR', 'Costa Rica'],
            ['CU', 'Cuba'],
            ['CV', 'Cabo Verde'],
            ['CW', 'Curaçao'],
            ['CX', 'Christmas Island'],
            ['CY', 'Cyprus'],
            ['CZ', 'Czech Republic'],
            ['DE', 'Germany'],
            ['DJ', 'Djibouti'],
            ['DK', 'Denmark'],
            ['DM', 'Dominica'],
            ['DO', 'Dominican Republic'],
            ['DZ', 'Algeria'],
            ['EC', 'Ecuador'],
            ['EE', 'Estonia'],
            ['EG', 'Egypt'],
            ['EH', 'Western Sahara'],
            ['ER', 'Eritrea'],
            ['ES', 'Spain'],
            ['ET', 'Ethiopia'],
            ['FI', 'Finland'],
            ['FJ', 'Fiji'],
            ['FK', 'Falkland Islands (Malvinas)'],
            ['FM', 'Micronesia, Federated States of'],
            ['FO', 'Faroe Islands'],
            ['FR', 'France'],
            ['GA', 'Gabon'],
            ['GB', 'United Kingdom of Great Britain and Northern Ireland'],
            ['GD', 'Grenada'],
            ['GE', 'Georgia'],
            ['GF', 'French Guiana'],
            ['GG', 'Guernsey'],
            ['GH', 'Ghana'],
            ['GI', 'Gibraltar'],
            ['GL', 'Greenland'],
            ['GM', 'Gambia'],
            ['GN', 'Guinea'],
            ['GP', 'Guadeloupe'],
            ['GQ', 'Equatorial Guinea'],
            ['GR', 'Greece'],
            ['GS', 'South Georgia and the South Sandwich Islands'],
            ['GT', 'Guatemala'],
            ['GU', 'Guam'],
            ['GW', 'Guinea-Bissau'],
            ['GY', 'Guyana'],
            ['HK', 'Hong Kong'],
            ['HM', 'Heard Island and McDonald Islands'],
            ['HN', 'Honduras'],
            ['HR', 'Croatia'],
            ['HT', 'Haiti'],
            ['HU', 'Hungary'],
            ['ID', 'Indonesia'],
            ['IE', 'Ireland'],
            ['IL', 'Israel'],
            ['IM', 'Isle of Man'],
            ['IN', 'India'],
            ['IO', 'British Indian Ocean Territory'],
            ['IQ', 'Iraq'],
            ['IR', 'Iran, Islamic Republic of'],
            ['IS', 'Iceland'],
            ['IT', 'Italy'],
            ['JE', 'Jersey'],
            ['JM', 'Jamaica'],
            ['JO', 'Jordan'],
            ['JP', 'Japan'],
            ['KE', 'Kenya'],
            ['KG', 'Kyrgyzstan'],
            ['KH', 'Cambodia'],
            ['KI', 'Kiribati'],
            ['KM', 'Comoros'],
            ['KN', 'Saint Kitts and Nevis'],
            ['KP', 'Korea, Democratic People\'s Republic of'],
            ['KR', 'Korea, Republic of'],
            ['KW', 'Kuwait'],
            ['KX', 'Kosovo, Repulic of'],
            ['KY', 'Cayman Islands'],
            ['KZ', 'Kazakhstan'],
            ['LA', 'Lao People\'s Democratic Republic'],
            ['LB', 'Lebanon'],
            ['LC', 'Saint Lucia'],
            ['LI', 'Liechtenstein'],
            ['LK', 'Sri Lanka'],
            ['LR', 'Liberia'],
            ['LS', 'Lesotho'],
            ['LT', 'Lithuania'],
            ['LU', 'Luxembourg'],
            ['LV', 'Latvia'],
            ['LY', 'Libya'],
            ['MA', 'Morocco'],
            ['MC', 'Monaco'],
            ['MD', 'Moldova, Republic of'],
            ['ME', 'Montenegro'],
            ['MF', 'Saint Martin (French part)'],
            ['MG', 'Madagascar'],
            ['MH', 'Marshall Islands'],
            ['MK', 'Macedonia, the former Yugoslav Republic of'],
            ['ML', 'Mali'],
            ['MM', 'Myanmar'],
            ['MN', 'Mongolia'],
            ['MO', 'Macao'],
            ['MP', 'Northern Mariana Islands'],
            ['MQ', 'Martinique'],
            ['MR', 'Mauritania'],
            ['MS', 'Montserrat'],
            ['MT', 'Malta'],
            ['MU', 'Mauritius'],
            ['MV', 'Maldives'],
            ['MW', 'Malawi'],
            ['MX', 'Mexico'],
            ['MY', 'Malaysia'],
            ['MZ', 'Mozambique'],
            ['NA', 'Namibia'],
            ['NC', 'New Caledonia'],
            ['NE', 'Niger'],
            ['NF', 'Norfolk Island'],
            ['NG', 'Nigeria'],
            ['NI', 'Nicaragua'],
            ['NL', 'Netherlands'],
            ['NO', 'Norway'],
            ['NP', 'Nepal'],
            ['NR', 'Nauru'],
            ['NU', 'Niue'],
            ['NZ', 'New Zealand'],
            ['OM', 'Oman'],
            ['PA', 'Panama'],
            ['PE', 'Peru'],
            ['PF', 'French Polynesia'],
            ['PG', 'Papua New Guinea'],
            ['PH', 'Philippines'],
            ['PK', 'Pakistan'],
            ['PL', 'Poland'],
            ['PM', 'Saint Pierre and Miquelon'],
            ['PN', 'Pitcairn'],
            ['PR', 'Puerto Rico'],
            ['PS', 'Palestine, State of'],
            ['PT', 'Portugal'],
            ['PW', 'Palau'],
            ['PY', 'Paraguay'],
            ['QA', 'Qatar'],
            ['RE', 'Réunion'],
            ['RO', 'Romania'],
            ['RS', 'Serbia'],
            ['RU', 'Russian Federation'],
            ['RW', 'Rwanda'],
            ['SA', 'Saudi Arabia'],
            ['SB', 'Solomon Islands'],
            ['SC', 'Seychelles'],
            ['SD', 'Sudan'],
            ['SE', 'Sweden'],
            ['SG', 'Singapore'],
            ['SH', 'Saint Helena, Ascension and Tristan da Cunha'],
            ['SI', 'Slovenia'],
            ['SJ', 'Svalbard and Jan Mayen'],
            ['SK', 'Slovakia'],
            ['SL', 'Sierra Leone'],
            ['SM', 'San Marino'],
            ['SN', 'Senegal'],
            ['SO', 'Somalia'],
            ['SR', 'Suriname'],
            ['SS', 'South Sudan'],
            ['ST', 'Sao Tome and Principe'],
            ['SV', 'El Salvador'],
            ['SX', 'Sint Maarten (Dutch part)'],
            ['SY', 'Syrian Arab Republic'],
            ['SZ', 'Swaziland'],
            ['TC', 'Turks and Caicos Islands'],
            ['TD', 'Chad'],
            ['TF', 'French Southern Territories'],
            ['TG', 'Togo'],
            ['TH', 'Thailand'],
            ['TJ', 'Tajikistan'],
            ['TK', 'Tokelau'],
            ['TL', 'Timor-Leste'],
            ['TM', 'Turkmenistan'],
            ['TN', 'Tunisia'],
            ['TO', 'Tonga'],
            ['TR', 'Turkey'],
            ['TT', 'Trinidad and Tobago'],
            ['TV', 'Tuvalu'],
            ['TW', 'Taiwan, Province of China'],
            ['TZ', 'Tanzania, United Republic of'],
            ['UA', 'Ukraine'],
            ['UG', 'Uganda'],
            ['UM', 'United States Minor Outlying Islands'],
            ['US', 'United States of America'],
            ['UY', 'Uruguay'],
            ['UZ', 'Uzbekistan'],
            ['VA', 'Holy See'],
            ['VC', 'Saint Vincent and the Grenadines'],
            ['VE', 'Venezuela, Bolivarian Republic of'],
            ['VG', 'Virgin Islands, British'],
            ['VI', 'Virgin Islands, U.S.'],
            ['VN', 'Viet Nam'],
            ['VU', 'Vanuatu'],
            ['WF', 'Wallis and Futuna'],
            ['WS', 'Samoa'],
            ['YE', 'Yemen'],
            ['YT', 'Mayotte'],
            ['ZA', 'South Africa'],
            ['ZM', 'Zambia'],
            ['ZW', 'Zimbabwe'],
        ],
    ];

    // Use Case version 12.0, Table 18
    // Primary residence (Home Address) of the person having legal custody of the pupil
    $AzSIS_SQL_Tables['PossibleAddressTypes'] = [
        'columns' => [
            'AddressType VARCHAR(15) NOT NULL',
            'PRIMARY KEY (AddressType)',
            'CHECK (AddressType<>"")'
        ],
        'values' => [
            ['Home'],
            ['Mailing'],
            ['Physical'],
        ],
    ];

    // Use Case version 12.0, Table 19
    // Possible Languages
    // TODO: Use Case 11.0 20251015 claims to add Swedish but does not
    $AzSIS_SQL_Tables['PossibleLanguages'] = [
        'columns' => [
            'LanguageCode SMALLINT UNSIGNED NOT NULL',
            'Language VARCHAR(50) NOT NULL',
            'PRIMARY KEY (LanguageCode)',
            'UNIQUE (Language)',
            'CHECK (Language<>"")'
        ],
        'values' => [
            [0, 'English'],
            [1, 'Spanish'],
            [2, 'Arabic'],
            [3, 'Cambodian'],
            [4, 'Cantonese'],
            [5, 'Czechoslovakian'],
            [6, 'Dutch'],
            [7, 'Filipino'],
            [8, 'Finnish'],
            [9, 'French'],
            [10, 'German'],
            [11, 'Greek'],
            [12, 'Hebrew'],
            [13, 'Hungarian'],
            [14, 'Italian'],
            [15, 'Japanese'],
            [16, 'Korean'],
            [17, 'Laotian'],
            [18, 'Mandarin'],
            [19, 'Polish'],
            [20, 'Portuguese'],
            [21, 'Romanian'],
            [22, 'Russian'],
            [23, 'Thai'],
            [24, 'Ukrainian'],
            [25, 'Vietnamese'],
            [26, 'Serbo-Croatian (formerly "Yugoslavia")'],
            [27, 'Other Non-Indian'],
            [28, 'Navajo'],
            [29, 'Apache (San Carlos)'],
            [30, 'Apache (Whiteriver)'],
            [31, 'Chemehuevi'],
            [32, 'Cocopah'],
            [33, 'Hopi'],
            [34, 'Haulapai'],
            [35, 'Kaibab-Paiute'],
            [36, 'Maricopa'],
            [37, 'Mohave'],
            [38, 'Papago (Tohono O\'odham)'],
            [39, 'Pima (Akimel O\'odham)'],
            [40, 'Supai'],
            [41, 'Tewa'],
            [42, 'Yaqui'],
            [43, 'Yavapai'],
            [44, 'Yuma'],
            [45, 'Other Indian'],
            [46, 'American Sign Language (ASL)'],
            [47, 'Albanian'],
            [48, 'Amharic'],
            [49, 'Azeri'],
            [50, 'Burmese'],
            [51, 'Dari'],
            [52, 'Dinka'],
            [53, 'Farsi'],
            [54, 'Kirundi'],
            [55, 'Kru'],
            [56, 'Lingala'],
            [57, 'Maay'],
            [58, 'Mandingo'],
            [59, 'Nuer'],
            [60, 'Pashto'],
            [61, 'Serbian'],
            [62, 'Somali'],
            [63, 'Swahili'],
            [64, 'Tagalog'],
            [65, 'Urdu'],
            [66, 'Uzbek'],
            [67, 'Vai'],
            [68, 'Afrikaans'],
            [69, 'Bengali'],
            [70, 'Hindi'],
            [71, 'Persian'],
            [72, 'Punjabi'],
            [73, 'Cherokee'],
            [74, 'Armenian'],
            [75, 'Bosnian'],
            [76, 'Central Khmer'],
            [77, 'Chuukese'],
            [78, 'Gujarati'],
            [79, 'Haitian; Haitian Creole'],
            [80, 'Hmong; Mong'],
            [81, 'Karen languages'],
            [82, 'Lao'],
            [83, 'Malayalam'],
            [84, 'Marshallese'],
            [85, 'Nepali'],
            [86, 'Otomian languages'],
            [87, 'Samoan'],
            [88, 'Tamil'],
            [89, 'Telugu'],
            [90, 'Tigrinya'],
            [91, 'Turkish'],
            [93, 'Twi'],
            [94, 'Yupik languages'],
            [95, 'Danish'],
        ],
    ];

    // Use Case version 12.0, Table 20
    // A description of how the language is used (e.g. Home Language, Spoken Language, or First Acquired Language).
    $AzSIS_SQL_Tables['PossibleLanguageUses'] = [
        'columns' => [
            'LanguageUse VARCHAR(35) NOT NULL',
            'PRIMARY KEY (LanguageUse)',
            'CHECK (LanguageUse<>"")'
        ],
        'values' => [
            ['Home language'],
            ['Spoken language'],
            ['First Acquired Language'],
        ],
    ];

    // Use Case version 12.0, Table 21
    // Key for race; Place of orgin
    $AzSIS_SQL_Tables['PossibleRaces'] = [
        'columns' => [
            'RaceCode VARCHAR(50) NOT NULL',
            'Race VARCHAR(75) NULL DEFAULT NULL',
            'PRIMARY KEY (RaceCode)',
            'UNIQUE (Race)',
            'CHECK (RaceCode<>"")',
            'CHECK (Race<>"")'
        ],
        'values' => [
            ['American Indian - Alaska Native', 'American Indian - Alaska Native'],
            ['Asian', 'Asian (Includes India)'],
            ['Black - African American', 'Black - African American'],
            ['Native Hawaiian - Pacific Islander', 'Native Hawaiian - Pacific Islander (Includes Guam, Samoa)'],
            ['White', 'White (Includes orgins in Europe, Middle East, N. Africa)'],

            ['Not Specified or Other', 'Not Specified or Other'],
        ],
    ];

    // Use Case version 12.0, Table 22
    // The characteristic designated for the Student.
    $AzSIS_SQL_Tables['PossibleStudentCharacteristics'] = [
        'columns' => [
            'StudentCharacteristicCode SMALLINT UNSIGNED NOT NULL',
            'StudentCharacteristic VARCHAR(50) NOT NULL',
            'PRIMARY KEY (StudentCharacteristicCode)',
            'UNIQUE (StudentCharacteristic)',
            'CHECK (StudentCharacteristic<>"")'
        ],
        'values' => [
            [3, 'Foster Care'],
            [8, 'Parent in Military'],
            [12, 'Single Parent'],
            [35, '1/4 or more degree Indian blood'],
        ],
    ];

    // Use Case version 12.0, Table 23
    // Possible Other Name Types
    $AzSIS_SQL_Tables['PossibleOtherNameTypes'] = [
        'columns' => [
            'OtherNameType VARCHAR(30) NOT NULL',
            'PRIMARY KEY (OtherNameType)',
            'CHECK (OtherNameType<>"")'
        ],
        'values' => [
            ['Alias'],
            ['Nickname'],
            ['Other Name'],
            ['Previous Legal Name'],
        ],
    ];

    // Use Case version 12.0, Table 24
    // Possible School EntryTypes
    // https://www.azed.gov/sites/default/files/2021/02/Withdrawal%20Codes%20Cheat%20Sheet_0.pdf
    $AzSIS_SQL_Tables['PossibleSchoolEntryTypes'] = [
        'columns' => [
            'SchoolEntryTypeCode VARCHAR(5) NOT NULL',
            'SchoolEntryType VARCHAR(300) NOT NULL',
            'StudentReturned BOOLEAN NOT NULL',
            'SchoolEntryTypeSortNumber DECIMAL(7,3) NOT NULL',
            'PRIMARY KEY (SchoolEntryTypeCode)',
            'UNIQUE (SchoolEntryType)',
            'UNIQUE (SchoolEntryTypeSortNumber)',
            'CHECK (SchoolEntryTypeCode<>"")',
            'CHECK (SchoolEntryType<>"")'
        ],
        'values' => [
            ['E1', 'Student entering Arizona public school for the first time this school year; last school attended was this school.', 1, 0.01],
            ['E2', 'Student entering Arizona public school for the first time this school year; last school attended was another school within this district.', 1, 0.02],
            ['E3', 'Student entering Arizona public school for the first time this school year; last school attended was outside this district but within the state of Arizona (includes all other options such as not enrolled in any school the prior year, or enrolled in a private school the prior year).', 0, 0.03],
            ['E4', 'Student entering this school who was previously enrolled this year in another Arizona public school outside the district.', 0, 0.04],
            ['E5', 'Student entering this school who was previously enrolled this year in another Arizona publicschool within the district.', 0, 0.05],
            ['E6', 'Student entering Arizona public school for the first time this year; last school attended was outside the state of Arizona', 0, 0.06],
            ['E7', 'Student entering Arizona public school for the first time this school year; was coded previous school as a dropout (W5); last school attended was another school within this district', 0, 0.07],
            ['E8', 'Student entering Arizona public school for the first time this school year; was coded by previous school as a dropout (W5); last school attended was outside this district but within the state of Arizona', 0, 0.08],
            ['E9', 'Student entering this school who was previously coded this school year in another Arizona public school as a dropout (W5); last school attended was within this district.', 0, 0.09],
            ['E10', 'Student entering this school who was previously coded this school year in another Arizona public school as a dropout (W5); last school attended was outside this district but within the state of Arizona', 0, 0.10],
            ['E11', 'Student entering Arizona public school for the first time this school year; in most recent schooling, student was home taught in the state of Arizona.', 0, 0.11],
            ['E15', 'Student entering Arizona public school for the first time this school year; last school attended was a detention facility within the state of Arizona.', 0, 0.15],
            ['E16', 'Student entering this school who was previously enrolled this school year in a detention facility within the state of Arizona.', 0, 0.16],
            ['E17', 'Student has received the Grand Canyon Diploma and is no longer attending the high school. Student is attending an Arizona university full-time.  The university must be under the jurisdiction of the Arizona Board of Regents.', 0, 0.17],
            ['E18', 'Student has received the Grand Canyon Diploma and is no longer attending the high school.Student is attending an Arizona community college full-time.', 0, 0.18],
            ['E19', 'Student is eligible for the Grand Canyon Diploma and is enrolled in a full-time CTE program.', 0, 0.19],
            ['E20', 'Student is eligible for GCD and is continuing with additional board exam programs to prepare for baccalaureate degree programs.', 0, 0.20],
            ['EK', 'Transferred from another calendar track within the same school before scheduled end of school year.', 1, 3.01],
            ['R1', 'Student re-entering after withdrawing from this school as a W1', 0, 1.01],
            ['R2', 'Student re-entering after withdrawing from this school as a W2', 0, 1.02],
            ['R3', 'Student re-entering after withdrawing from this school as a W3', 0, 1.03],
            ['R4', 'Student re-entering after withdrawing from this school as a W4', 0, 1.04],
            ['R5', 'Student re-entering after withdrawing from this school as a W5', 0, 1.05],
            ['R6', 'Student re-entering after withdrawing from this school as a W6', 0, 1.06],
            ['R7', 'Student Grade Reassignment', 1, 1.07],
            ['R9', 'Student re-entering after withdrawing from this school as a W9', 0, 1.09],
            ['R10', 'Student re-entering after withdrawing from this school as a W10', 0, 1.10],
            ['R11', 'Student re-entering after withdrawing from this school as a W11', 0, 1.11],
            ['R12', 'Student re-entering after withdrawing from this school as a W12', 0, 1.12],
            ['R13', 'Student re-entering after withdrawing from this school as a W13', 0, 1.13],
            ['R21', 'Student re-entering after withdrawing from this school as a W21', 0, 1.21],
            ['R22', 'Student re-entering after withdrawing from this school as a W22', 0, 1.22],
            ['R31', 'Student re-entering after withdrawing from this school as a W31', 0, 1.31],
            ['R41', 'Student re-entering after withdrawing from this school as a W41', 0, 1.41],
            ['R51', 'Student re-entering after withdrawing from this school as a W51.', 0, 1.51],
            ['RD', 'Student re-entered after mid-year demotion to the previous grade level during the current school year.', 1, 2.01],
            ['RP', 'Student re-entered after mid-year promotion to the next grade level during the current school year.', 1, 2.02],
        ],
    ];

    // Use Case version 12.0, Table 25
    // Possible School WithdrawTypes
    $AzSIS_SQL_Tables['PossibleSchoolWithdrawTypes'] = [
        'columns' => [
            'SchoolWithdrawTypeCode VARCHAR(5) NOT NULL',
            'SchoolWithdrawType VARCHAR(350) NOT NULL',
            'StudentIsActiveInSchool BOOLEAN NOT NULL',
            'StudentIsReturning BOOLEAN NOT NULL',
            'SchoolWithdrawTypeSortNumber DECIMAL(7,3) NOT NULL',
            'PRIMARY KEY (SchoolWithdrawTypeCode)',
            'UNIQUE (SchoolWithdrawType)',
            'UNIQUE (SchoolWithdrawTypeSortNumber)',
            'CHECK (SchoolWithdrawTypeCode<>"")',
            'CHECK (SchoolWithdrawType<>"")'
        ],
        'values' => [
            ['A', 'Attended - Concluded high school education and not expected to reenroll', 1, 0, 2.01],
            ['C', 'Completed course of study at year end', 1, 0, 2.02],
            ['CC', 'Completed Concurrent Enrollment. Students who are officially concurrently (co-enrolled/ancillary) enrolled in a second location, having completed their courses, need to exit the school’s cohort (grades 9-12) on the last day of the calendar year.', 0, 0, 2.03],
            ['G', 'Graduated at year end', 1, 0, 2.04],
            ['P', 'Promoted to the next grade. Applies to students in all grade levels except grade 12. If a student is ungraded elementary or ungraded secondary and have met requirements for the school year, they can be shown as Promoted even though they will still be enrolled in the same grade level the following year.', 1, 1, 2.05],
            ['R', 'Retained', 1, 1, 2.06],
            ['SC', 'Still Enrolled (Course Study Requirements)', 1, 1, 2.07],
            ['SE', 'Still Enrolled (Met No Requirements)', 1, 1, 2.08],
            ['S1', 'Summer transfer out of district', 1, 0, 1.01],
            ['S2', 'Chronic Illness- Withdrawn during the summer due to chronic illness. Withdrawal may not be required; refer to district\'s chronic illness policy.', 1, 0, 1.02],
            ['S3', 'Summer expulsion', 1, 0, 1.03],
            ['S4', 'Summer absence or status unknown', 1, 0, 1.04],
            ['S5', 'Summer dropout', 1, 0, 1.05],
            ['S6', 'Summer not of school age', 0, 0, 1.06],
            ['S7', 'Summer early graduation', 1, 0, 1.07],
            ['S8', 'Student died during the summer. (same criteria as W8)', 1, 0, 1.08],
            ['S9', 'Student became home taught during the summer. (same criteria as W9)', 1, 0, 1.09],
            ['S10', 'Withdrawn because student was transferred to a state detention or correctional facility during the summer. (same criteria as W10)', 1, 0, 1.10],
            ['S11', 'Student withdrew to receive a GED certificate during the summer. (same criteria as W11)', 1, 0, 1.11],
            ['S12', 'Student withdrew to attend a vocational school during the summer. (same criteria as W12)', 1, 0, 1.12],
            ['S13', 'Student completed a course of study at a Career and Technical Education District (CTED) during the summer before or after graduation. Completers have concluded their high school education and are NOT expected to reenroll except in cases such enrollment in a CTED post-graduation.', 0, 0, 1.13],
            ['S19', 'Same as the W19 code description detail except that the S-Code* rules apply.', 0, 0, 1.19],
            ['S20', 'Same as the W20 code description detail except that the S-Code* rules apply.', 0, 0, 1.20],
            ['S21', 'Student withdrawn during the summer in  order to attend a school out of state', 1, 0, 1.21],
            ['S22', 'Withdrawn during the summer in order to attend a school out of the country', 1, 0, 1.22],
            ['S31', 'Summer suspension on a long term basis', 1, 0, 1.31],
            ['S41', 'Summer withdrawn with completed withdrawal form; awaiting confirmation from subsequent enrolling school.', 1, 0, 1.41],
            ['S51', 'School received verification that a student under the age of 16 has withdrawn from school during the summer; student does not intend to complete requirements for a high school diploma and qualifies with documentation based on ARS §15-802(D)(2-5).', 1, 0, 1.51],
            ['S99', 'Student transferred to another school within this district during the summer. (Criteria: none.)', 1, 0, 1.99],
            ['W1', 'Withdrawn before the scheduled end of year to attend a school in state.', 0, 0, 0.01],
            ['W2', 'Withdrawn before scheduled end of school year due to chronic illness (withdrawal may not be required; refer to district\'s chronic illness policy)', 0, 0, 0.02],
            ['W3', 'Expelled before scheduled end of school year', 0, 0, 0.03],
            ['W4', 'Withdrawn before scheduled end of school year for 10 consecutive days of unexcused absence, status or location is unknown to the school or school district.', 0, 0, 0.04],
            ['W5', 'School received verification that student has withdrawn from school before scheduled end of school year; student does not intend to complete requirements for a high school diploma.', 0, 0, 0.05],
            ['W6', 'Withdrawn before scheduled end of school year because student is not of school age (under 6 or over 21 years of age).', 0, 0, 0.06],
            ['W7', 'Student has completed course of study requirements for high school and received a passing score on the AIMS test (applies to midyear graduates in grades 11 or 12). Graduates are issued a high school diploma by the school district.', 0, 0, 0.07],
            ['W8', 'Student died before scheduled end of school year', 0, 0, 0.08],
            ['W9', 'Student withdrawn before scheduled end of school year to be taught at home.', 0, 0, 0.09],
            ['W10', 'Withdrawn before scheduled end of school year because student was transferred to a state detention or correctional facility.', 0, 0, 0.10],
            ['W11', 'Student withdrew before scheduled end of school year expressly for the purpose of obtaining a GED. Students of high school age must withdraw to take the GED test.Verbal notification at the time of withdrawal is sufficient to apply the W11 code', 0, 0, 0.11],
            ['W12', 'Student withdrew before scheduled end of school year to continue studies at a technical or vocational school; this includes ALL schools or education programs that DO NOT meet Arizona requirements for obtaining a high school diplomal.Verbal notification from a responsible adult is sufficient to apply the W12 code.', 0, 0, 0.12],
            ['W13', 'Student completed a course of study at a Career and Technical Education District (CTED) mid-year before or after graduation. Completers have concluded their high school education and are NOT expected to reenroll except in cases such enrollment in a CTED post-graduation.', 0, 0, 0.13],
            ['W14', 'Student has met all of the requirements for the Grand Canyon Diploma but has not been awarded the diploma.  Student is continuing in high school.', 0, 0, 0.14],
            ['W15', 'Student has met all of the requirements for the Grand Canyon Diploma and has been awarded the diploma.', 0, 0, 0.15],
            ['W17', 'Student received the Grand Canyon Diploma but LEA may not count this student because student: 1. Is no longer enrolled full-time at an AZ public university; or 2. Is no longer enrolled in an AZ public university', 0, 0, 0.17],
            ['W18', 'Student received the Grand Canyon Diploma but LEA may not count this student because student: 1. Is no longer enrolled in an AZ Community College; or 2. Is no longer enrolled full-time at an AZ community college.', 0, 0, 0.18],
            ['W19', 'Student was eligible for the Grand Canyon Diploma but LEA may not count this student because student is no longer enrolled in a full-time CTE program.', 0, 0, 0.19],
            ['W20', 'Student has been awarded the Grand Canyon Diploma and the student\'s post GCD participation is unknown or ineligible.', 0, 0, 0.20],
            ['W21', 'Withdrawn before the scheduled end of year in  order to attend a school out of state.', 0, 0, 0.21],
            ['W22', 'Withdrawn before the scheduled end of year in  order to attend a school out of the country', 0, 0, 0.22],
            ['W31', 'Suspended on a long term basis before scheduled end of school year', 0, 0, 0.031],
            ['W41', 'Withdrawn before scheduled end of school year with completed withdrawal form; awaiting confirmation from subsequent enrolling school.', 0, 0, 0.41],
            ['W51', 'School received verification that a student under the age of 16 has withdrawn from school before scheduled end of school year; student does not intend to complete requirements for a high school diploma and qualifies with documentation based on ARS §15-802(D)(2-5).', 0, 0, 0.51],
            ['WD', 'Student was demoted to the previous grade level during the current school year.', 0, 1, 3.01],
            ['WK', 'Transferred to another calendar track within the same school before scheduled end of school year.', 0, 1, 3.02],
            ['WP', 'Student was promoted to the next grade level during the current school year.', 0, 1, 3.03],
        ],
    ];

    // Use Case version 12.0, Table 26
    // Withdrawal Reasons are a secondary reason for the withdrawal (the primary reason being the Withdrawal Activity Code). Withdrawal Reasons are optional, and will not apply to the great majority of students who withdraw from school prior to the last scheduled day of session.
    $AzSIS_SQL_Tables['PossibleSchoolWithdrawReasons'] = [
        'columns' => [
            'SchoolWithdrawReasonCode CHAR(3) NOT NULL',
            'SchoolWithdrawReason VARCHAR(100) NOT NULL',
            'PRIMARY KEY (SchoolWithdrawReasonCode)',
            'UNIQUE (SchoolWithdrawReason)',
            'CHECK (SchoolWithdrawReasonCode<>"")',
            'CHECK (SchoolWithdrawReason<>"")'
        ],
        'values' => [
            ['WR1', 'School identified for Federal School Improvement'],
            ['WR2', 'School identified as persistently dangerous'],
            ['WR3', 'Individual Transfer Option (victim of a violent crime or criminal act)'],
            ['WR4', 'Pregnancy / Biological Parent of a Child'],
        ],
    ];

    // Use Case version 12.0, Table 27
    // Membership Type identifies whether a school has primary responsibility for managing a specific student's curriculum or not.
    $AzSIS_SQL_Tables['PossibleSchoolMemberships'] = [
        'columns' => [
            'SchoolMembershipCode CHAR(1) NOT NULL',
            'SchoolMembership VARCHAR(50) NOT NULL',
            'PRIMARY KEY (SchoolMembershipCode)',
            'UNIQUE (SchoolMembership)',
            'CHECK (SchoolMembershipCode<>"")',
            'CHECK (SchoolMembership<>"")'
        ],
        'values' => [
            ['A', 'Ancillary'],
            ['C', 'Concurrent Course Work Program Enrollment'],
            ['D', 'Dropout Recovery Program Enrollment'],
            ['G', 'Grand Canyon Diploma Enrollment'],
            ['M', 'Main'],
            ['T', 'AOI (formerly TAPBI)'],
        ],
    ];

    // Use Case version 12.0, Table 28
    // The ID of the Membership FTE Descriptor.
    //     Membership Type identifies whether a school has primary responsibility for managing a specific student's curriculum or not. The "P" code value will allow the reporting of students who are enrolled in a SPED program but not enrolled in a school.
    $AzSIS_SQL_Tables['PossibleSchoolFulltimeEquivalents'] = [
        'columns' => [
            'FulltimeEquivalentCode DECIMAL(3,2) NOT NULL',
            'FulltimeEquivalent VARCHAR(100) NOT NULL',
            'PRIMARY KEY (FulltimeEquivalentCode)',
            'UNIQUE (FulltimeEquivalent)',
            'CHECK (FulltimeEquivalent<>"")'
        ],
        'values' => [
            [0.00, 'Student\'s course load is part time, equivalent to 0% of a full-time program'],
            [0.25, '0.25 Student\'s course load is part time, equivalent to 25% of a full-time program'],
            [0.50, '0.50 Student\'s course load is part time, equivalent to 50% of a full-time program'],
            [0.75, '0.75 Student\'s course load is part time, equivalent to 75% of a full-time program'],
            [1.00, '1.00 Student\'s course load is full time, equivalent to 100% of a full-time program'],
        ],
    ];

    // Use Case version 12.0, Table 29
    // The ID of the Tuition Payer Descriptor.
    $AzSIS_SQL_Tables['PossibleTuitionPayers'] = [
        'columns' => [
            'TuitionPayerCode TINYINT UNSIGNED NOT NULL',
            'TuitionPayerIdIsFromAde BOOLEAN NOT NULL',
            'TuitionPayer VARCHAR(255) NOT NULL',
            'PRIMARY KEY (TuitionPayerCode,TuitionPayerIdIsFromAde)',
            'UNIQUE (TuitionPayer)',
            'CHECK (TuitionPayer<>"")'
        ],
        'values' => [
            [1, 1, 'The "normal" setting for Arizona school children who generate state funding.'],
            [2, 1, 'Privately paid tuition, no tuition charged, or not eligible for state funding.'],
            [3, 1, 'Foreign exchange student'],
            [4, 1, 'Non-SPED (NSE) students in residential treatment centers'],
            [5, 1, 'JTED/Non-Resident Charter (concurrent)'],
            [6, 1, 'ISEP student'],
            [7, 1, 'Students funded through other state formula programs'],
            [8, 1, 'Non-Arizona resident boarding at specialized school'],
            [9, 1, 'Designed for students enrolled at a CTED, which may be eligible for future funding if they meet the requirements in A.R.S.§15-393. Please refer to School Finance for guidance on using Tuition Payer Code 9.'],
            [1, 0, 'Empowerment Scholarship'],
            [2, 0, 'Arizona Certified School Tuition Organization (STO)'],
            [3, 0, 'Privately paid tuition'],
            [4, 0, 'International student'],
        ],
    ];

    // Use Case version 12.0, Table 30
    // The ID of the Special Enrollment Descriptor
    $AzSIS_SQL_Tables['PossibleSpecialEnrollments'] = [
        'columns' => [
            'SpecialEnrollmentCode TINYINT UNSIGNED NOT NULL',
            'SpecialEnrollment VARCHAR(30) NOT NULL',
            'PRIMARY KEY (SpecialEnrollmentCode)',
            'UNIQUE (SpecialEnrollment)',
            'CHECK (SpecialEnrollment<>"")'
        ],
        'values' => [
            [1, 'CECA'],
            [2, 'CECB'],
            [3, 'Open Enrollment'],
            [4, '976-State Assistance'],
            [5, '823-Interstate Compact'],
            [255, 'Type 03 HS Student'],
        ],
    ];

    // Use Case version 12.0, Table 31
    // The way the student entered this course section, either as a new enrollee or as a transfer from another section at the same school
    $AzSIS_SQL_Tables['PossibleClassroomEntryTypes'] = [
        'columns' => [
            'ClassroomEntryTypeCode CHAR(1) NOT NULL',
            'ClassroomEntryType VARCHAR(20) NOT NULL',
            'PRIMARY KEY (ClassroomEntryTypeCode)',
            'UNIQUE (ClassroomEntryType)',
            'CHECK (ClassroomEntryTypeCode<>"")',
            'CHECK (ClassroomEntryType<>"")'
        ],
        'values' => [
            ['N', 'New enrollment'],
            ['R', 'Re-entry'],
            ['T', 'Transfer'],
        ],
    ];

    // Use Case version 12.0, Table 32
    // The type of exit the student had from this course section
    $AzSIS_SQL_Tables['PossibleClassroomExitTypes'] = [
        'columns' => [
            'ClassroomExitTypeCode CHAR(2) NOT NULL',
            'ClassroomExitType VARCHAR(50) NOT NULL',
            'StudentIsActiveInClassroom BOOLEAN NOT NULL',
            'PRIMARY KEY (ClassroomExitTypeCode)',
            'UNIQUE (ClassroomExitType)',
            'CHECK (ClassroomExitTypeCode<>"")',
            'CHECK (ClassroomExitType<>"")'
        ],
        'values' => [
            ['CF', 'Content Complete - Full Credit', 1],
            ['CP', 'Content Complete - Partial Credit', 1],
            ['CN', 'Content Complete-No Credit/Academic Progress', 1],
            ['LS', 'Left the School', 0],
            ['OE', 'Open Ended Course', 1],
            ['SC', 'Schedule Change', 0],
        ],
    ];

    // Use Case version 12.0, Table 33
    // The nature of an individual's relationship to a student; for example:  Father  Mother  Step Father  Step Mother  Foster Father  Foster Mother  Guardian;  National Education Data Model (NEDM): Relationship to Student
    $AzSIS_SQL_Tables['PossibleRelationships'] = [
        'columns' => [
            'RelationshipCode VARCHAR(50) NOT NULL',
            'Relationship VARCHAR(50) NOT NULL',
            'PRIMARY KEY (RelationshipCode)',
            'UNIQUE (Relationship)',
            'CHECK (RelationshipCode<>"")',
            'CHECK (Relationship<>"")'
        ],
        'values' => [
            ['Aunt', 'Aunt'],
            ['AzEIP Service Coordinator', 'AzEIP Service Coordinator'],
            ['Brother', 'Brother'],
            ['BrotherInLaw', 'Brother-in-law'],
            ['CourtAppointedGuardian', 'Court-appointed Guardian'],
            ['Cousin', 'Cousin'],
            ['Daughter', 'Daughter'],
            ['DaughterInLaw', 'Daughter-in-law'],
            ['Employer', 'Employer'],
            ['Father', 'Father'],
            ['Father, step', 'Stepfather'],
            ['FatherInLaw', 'Father-in-law'],
            ['FathersCivilPartner', 'Father’s Civil Partner'],
            ['FathersSignificantOther', 'Father’s Significant Other'],
            ['Fiance', 'Fiance'],
            ['Fiancee', 'Fiancee'],
            ['Foster parent', 'Foster Parent'],
            ['Friend', 'Friend'],
            ['Grandfather', 'Grandfather'],
            ['Grandmother', 'Grandmother'],
            ['Great aunt', 'Great-aunt'],
            ['Great Grandparent', 'Great-grandparent'],
            ['Great uncle', 'Great-uncle'],
            ['Guardian', 'Guardian'],
            ['Husband', 'Husband'],
            ['Mother', 'Mother'],
            ['Mother, step', 'Stepmother'],
            ['MotherInLaw', 'Mother-in-law'],
            ['MothersCivilPartner', 'Mother’s Civil Partner'],
            ['MothersSignificantOther', 'Mother’s SignificantOther'],
            ['Neighbor', 'Neighbor'],
            ['Nephew', 'Nephew'],
            ['Niece', 'Niece'],
            ['Other', 'Other'],
            ['Self', 'Self'],
            ['Sibling', 'Sibling'],
            ['SignificantOther', 'Significant Other'],
            ['Sister', 'Sister'],
            ['SisterInLaw', 'Sister-in-law'],
            ['Son', 'Son'],
            ['SonInLaw', 'Son-in-law'],
            ['Spouse', 'Spouse'],
            ['Surrogate Parent', 'Surrogate Parent'],
            ['Uncle', 'Uncle'],
            ['Unknown', 'Unknown'],
            ['Ward', 'Ward'],
            ['Wife', 'Wife'],
        ],
    ];

    // Use Case version 12.0, Table 34
    // Key for AttendanceEventCategoryType: Excused and Unexcused absence are submitted when reporting absences; "In Attendance" is only submitted when reporting attendance Minutes for AOI, preschool, or Homebound students or for schools who operate on an alternative calendar
    $AzSIS_SQL_Tables['PossibleAttendanceEventCategories'] = [
        'columns' => [
            'AttendanceEventCategoryCode TINYINT UNSIGNED NOT NULL',
            'AttendanceEventCategoryDescription VARCHAR(25) NOT NULL',
            'PRIMARY KEY (AttendanceEventCategoryCode)',
            'UNIQUE (AttendanceEventCategoryDescription)',
            'CHECK (AttendanceEventCategoryDescription<>"")'
        ],
        'values' => [
            [1, 'Excused'],
            [2, 'Unexcused'],
            [3, 'In Attendance'],
            [4, 'In Attendance - DL'],
            [5, 'Absence - DL'],
        ],
    ];

    // Use Case version 12.0, Table 35
    // The ID of the Membership FTE Descriptor.
    //     Membership Type identifies whether a school has primary responsibility for managing a specific student's curriculum or not. The "P" code value will allow the reporting of students who are enrolled in a SPED program but not enrolled in a school.
    $AzSIS_SQL_Tables['PossibleEventDurations'] = [
        'columns' => [
            'EventDurationCode DECIMAL(3,2) NOT NULL',
            'EventDuration VARCHAR(100) NOT NULL',
            'PRIMARY KEY (EventDurationCode)',
            'UNIQUE (EventDuration)',
            'CHECK (EventDuration<>"")'
        ],
        'values' => [
            [0.25, 'student was absent for the equivalent of one-fourth of a full school day'],
            [0.50, 'student was absent for the equivalent of one half of a full school day'],
            [0.75, 'student was absent for the equivalent of three-fourths of a full school day'],
            [1.00, 'student was absent for the equivalent of one full school day'],
        ],
    ];

    // Use Case version 12.0, Table 36
    // The result from the student's attempt to take the course, for example:  Pass/Fail/ Incomplete/Withdrawn/Expelled  - To be used by K-8 grades that do not fullfill subject matter courses.
    $AzSIS_SQL_Tables['PossibleCourseAttemptResults'] = [
        'columns' => [
            'CourseAttemptResult VARCHAR(25) NOT NULL',
            'PRIMARY KEY (CourseAttemptResult)',
            'CHECK (CourseAttemptResult<>"")'
        ],
        'values' => [
            ['Fail'],
            ['Incomplete'],
            ['Pass'],
            ['Withdrawn'],
            ['Not Applicable'],
        ],
    ];

    // Use Case version 12.0, Table 37
    // Possible Electronic Mail Types
    $AzSIS_SQL_Tables['PossibleElectronicMailTypes'] = [
        'columns' => [
            'ElectronicMailType VARCHAR(20) NOT NULL',
            'PRIMARY KEY (ElectronicMailType)',
            'CHECK (ElectronicMailType<>"")'
        ],
        'values' => [
            ['Home/Personal'],
            ['Organization'],
            ['Other'],
            ['Work'],
        ],
    ];

    // Use Case version 12.0, Table 38
    // Possible Primary Nighttime Residences
    $AzSIS_SQL_Tables['PossiblePrimaryNighttimeResidences'] = [
        'columns' => [
            'PrimaryNighttimeResidenceCode TINYINT UNSIGNED NOT NULL',
            'PrimaryNighttimeResidence VARCHAR(20) NOT NULL',
            'PRIMARY KEY (PrimaryNighttimeResidenceCode)',
            'UNIQUE (PrimaryNighttimeResidence)',
            'CHECK (PrimaryNighttimeResidence<>"")'
        ],
        'values' => [
            [1, 'Sheltered'],
            [2, 'Doubled Up'],
            [3, 'Unsheltered'],
            [4, 'Hotels/motels'],
        ],
    ];

    // Use Case version 12.0, Table 39
    // The reason the child left the Program within a school or district.
    $AzSIS_SQL_Tables['Possible21stCenturyCommunityLearningCenterExitTypes'] = [
        'columns' => [
            'ProgramExitTypeCode VARCHAR(10) NOT NULL',
            'ProgramExitType VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ProgramExitTypeCode)',
            'CHECK (ProgramExitTypeCode<>"")',
            'CHECK (ProgramExitType<>"")'
        ],
        'values' => [
            ['CCLC01', 'Reached 30 days of attendance and services no longer needed'],
            ['CCLC02', 'Dropped from program due to lack of attendance'],
            ['CCLC03', 'Participation ended in program'],
        ],
    ];
    $AzSIS_SQL_Tables['PossibleDropoutRecoveryProgramExitTypes'] = [
        'columns' => [
            'ProgramExitTypeCode VARCHAR(10) NOT NULL',
            'ProgramExitType VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ProgramExitTypeCode)',
            'CHECK (ProgramExitTypeCode<>"")',
            'CHECK (ProgramExitType<>"")'
        ],
        'values' => [
            ['DRP01', 'Awarded diploma'],
            ['DRP02', 'Enrolled in LEA'],
            ['DRP03', 'Withdrawn by LEA'],
            ['DRP04', 'Withdrew from DRP program'],
            ['DRP05', 'End of school year'],
        ],
    ];
    $AzSIS_SQL_Tables['PossibleEnglishLanguageLearnerProgramExitTypes'] = [
        'columns' => [
            'ProgramExitTypeCode VARCHAR(10) NOT NULL',
            'ProgramExitType VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ProgramExitTypeCode)',
            'CHECK (ProgramExitTypeCode<>"")',
            'CHECK (ProgramExitType<>"")'
        ],
        'values' => [
            ['ELL01', 'Reclassified Fluent English Proficient'],
            ['ELL02', 'Withdrawn from school'],
            ['ELL05', 'Transferred to a different program'],
            ['ELL06', 'End of school year'],
            ['ELL08', 'Transferred to Different Track'],
        ],
    ];
    $AzSIS_SQL_Tables['PossibleGrandCanyonDiplomaProgramExitTypes'] = [
        'columns' => [
            'ProgramExitTypeCode VARCHAR(10) NOT NULL',
            'ProgramExitType VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ProgramExitTypeCode)',
            'CHECK (ProgramExitTypeCode<>"")',
            'CHECK (ProgramExitType<>"")'
        ],
        'values' => [
            ['GCD01', 'Awarded GCD'],
            ['GCD02', 'Withdrew from GCD program'],
            ['GCD03', 'End of school year'],
            ['GCD04', 'Eligible for GCD but diploma not awarded'],
        ],
    ];
    $AzSIS_SQL_Tables['PossibleSpecialEducationProgramExitTypes'] = [
        'columns' => [
            'ProgramExitTypeCode VARCHAR(10) NOT NULL',
            'ProgramExitType VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ProgramExitTypeCode)',
            'CHECK (ProgramExitTypeCode<>"")',
            'CHECK (ProgramExitType<>"")'
        ],
        'values' => [
            ['SPED01', 'Transferred to Regular Education'],
            ['SPED02', 'Graduated with regular high school diploma'],
            ['SPED03', 'Reached maximum age'],
            ['SPED04', 'Died'],
            ['SPED05', 'Moved, known to be continuing'],
            ['SPED07', 'Dropped out'],
            ['SPED09', 'Ends one LRE but starts another'],
            ['SPED10', 'Withdrawn by Parent and no Longer  enrolled'],
            ['SPED11', 'Expelled but still receiving services'],
            ['SPED13', 'School is Out'],
            ['SPED14', 'No longer eligible for PS SPED and not attending any education programs.'],
        ],
    ];

    // Use Case version 12.0, Table 40
    // The ID of the Student Need Descriptor.
    $AzSIS_SQL_Tables['PossibleSupportNeeds'] = [
        'columns' => [
            'SupportNeedCode TINYINT UNSIGNED NOT NULL',
            'SupportNeed VARCHAR(50) NOT NULL',
            'PRIMARY KEY (SupportNeedCode)',
            'UNIQUE (SupportNeed)',
            'CHECK (SupportNeed<>"")'
        ],
        'values' => [
            [8, 'Immigrant'],
            [9, 'Neglected'],
            [10, 'Delinquent'],
            [11, 'Homebound'],
            [16, 'Refugee'],
            [26, 'Chronic Health Problem, A.R.S. § 15-346'],
            [20, 'Evacuee'],
            [28, 'Income Eligibility 1'],
            [29, 'Income Eligibility 2'],
            [13, 'Math'],
            [14, 'Language Arts (reading and/or writing)'],
            [15, 'Science'],
            [18, 'Social Studies'],
            [19, 'Other Academic Services'],
            [1, 'Quantitative (Math) Giftedness'],
            [2, 'Language Arts (Verbal) Giftedness'],
            [3, 'Non-Verbal Reasoning Giftedness'],
            [27, 'Other Giftedness'],
        ],
    ];
    // NOND NOND This value represents "no need"

    // Use Case version 12.0, Table 41
    // The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. [on Support Program tab],
    $AzSIS_SQL_Tables['PossibleSupportPrograms'] = [
        'columns' => [
            'SupportProgram VARCHAR(75) NOT NULL',
            'SupportProgramCode TINYINT UNSIGNED NULL',
            'PRIMARY KEY (SupportProgram)',
            'UNIQUE (SupportProgramCode)',
            'CHECK (SupportProgram<>"")'
        ],
        'values' => [
            ['Johnson-O\'Malley Indian Education', 36],
            ['Title I Mathematics', 28],
            ['Title I Other', 29],
            ['Title I Reading', 30],
            ['Title I Science', 31],
            ['Title I Social Studies', 32],
            ['Coordinated Early Intervening Services- Behavior', null],
            ['Coordinated Early Intervening Services- Math', null],
            ['Coordinated Early Intervening Services- Other', null],
            ['Coordinated Early Intervening Services- Reading', null],
            ['21st CCLC', null],
        ],
    ];

    // Use Case version 12.0, Table 41
    // The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. [on Support Program tab],
    $AzSIS_SQL_Tables['PossibleEnglishLanguageLearnerPrograms'] = [
        'columns' => [
            'EnglishLanguageLearnerProgamCode CHAR(2) NOT NULL',
            'EnglishLanguageLearnerProgam VARCHAR(75) NOT NULL',
            'PRIMARY KEY (EnglishLanguageLearnerProgamCode)',
            'UNIQUE (EnglishLanguageLearnerProgam)',
            'CHECK (EnglishLanguageLearnerProgamCode<>"")',
            'CHECK (EnglishLanguageLearnerProgam<>"")'
        ],
        'values' => [
            ['A1', 'Structured English Immersion (SEI) Pull-Out Model'],
            ['A2', 'Structured English Immersion (SEI) Two-Hour Model'],
            ['A4', 'Structured English Immersion (SEI) Newcomer Model'],
            ['A5', '50-50 Dual Language Immersion (DLI) Model'],
            ['B1', 'Bilingual with Waiver 1'],
            ['B2', 'Bilingual with Waiver 2'],
            ['B3', 'Bilingual with Waiver 3'],
            ['PW', 'Parent Withdrawn EL'],
        ],
    ];

    // Use Case version 12.0, Table 43
    // The ID of the Student Need Descriptor. [on SPED Program tab],
    $AzSIS_SQL_Tables['PossibleSpecialEducationNeeds'] = [
        'columns' => [
            'SpecialEducationNeedCode VARCHAR(10) NOT NULL',
            'SpecialEducationNeed VARCHAR(100) NOT NULL',
            'PRIMARY KEY (SpecialEducationNeedCode)',
            'UNIQUE (SpecialEducationNeed)',
            'CHECK (SpecialEducationNeedCode<>"")',
            'CHECK (SpecialEducationNeed<>"")'
        ],
        'values' => [
            ['A', 'Autism'],
            ['DD', 'Developmental Delay'],
            ['ED', 'Emotional Disability'],
            ['EDP', 'Emotional Disability (separate facility, private school)'],
            ['HI', 'Hearing Impairment'],
            ['MD', 'Multiple Disabilities'],
            ['MDSSI', 'Multiple Disabilities - Severe Sensory Impairment'],
            ['MIID', 'Mild Intellectual Disability'],
            ['MOID', 'Moderate Intellectual Disability'],
            ['OHI', 'Other Health Impairment'],
            ['OI', 'Orthopedic Impairment'],
            ['PSD', 'Preschool - Severe Delay'],
            ['SLD', 'Specific Learning Disability'],
            ['SLI', 'Speech/Language Impairment'],
            ['SID', 'Severe Intellectual Disability'],
            ['TBI', 'Traumatic Brain Injury'],
            ['VI', 'Visual Impairment'],
        ],
    ];

    // Use Case version 12.0, Table 44
    // Use Case version 12.0, Table 45
    // The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. [on SPED Program tab],
    $AzSIS_SQL_Tables['PossibleSpecialEducationPrograms'] = [
        'columns' => [
            'SpecialEducationProgramCode VARCHAR(10) NOT NULL',
            'SpecialEducationProgram VARCHAR(100) NOT NULL',
            'PRIMARY KEY (SpecialEducationProgramCode)',
            'UNIQUE (SpecialEducationProgram)',
            'CHECK (SpecialEducationProgramCode<>"")',
            'CHECK (SpecialEducationProgram<>"")'
        ],
        'values' => [
            ['A', 'Inside Regular Class 80% or more of school day'],
            ['B', 'Inside Regular Class for no more than 79% and no less than 40% of school day'],
            ['C', 'Inside Regular Class less than 40% of the day.'],
            ['D', 'Public or Private Separate Day School for greater than 50% of school day'],
            ['E', 'Public/Private Residential Facility for greater than 50% of day by IEP'],
            ['ES', 'Public/Private Residential Facility for greater than 50% of day by SPA'],
            ['FA', 'Correctional Facilities with code A'],
            ['FB', 'Correctional Facilities with code B'],
            ['FC', 'Correctional Facilities with code C'],
            ['H', 'H Hospital or Home Instruction.'],
            ['J', 'Private School placement, enrolled by parent(s)'],
            ['L', 'Group B Disability services for Students not on an IEP'],
            ['PA1', 'PS SPED AT LEAST 10 hrs/week; majority of SPED services in REG EC PROGRAM'],
            ['PA2', 'PS SPED AT LEAST 10 hrs/week; majority of SPED services in OTHER LOCATION'],
            ['PB1', 'PS SPED LESS THAN 10 hrs/week; majority of SPED in REGULAR EC PROGRAM'],
            ['PB2', 'PS SPED LESS THAN 10 hrs/week; majority of SPED in SOME OTHER LOCATION'],
            ['PD', 'Separate Class. SPED program in a class primarily for SPED children'],
            ['PE', 'Separate School. All SPED services in public/private day school for SPED'],
            ['PG', 'Residential Facility'],
            ['PH1', 'Home AT LEAST 360 minutes per week.'],
            ['PH2', 'Home LESS THAN 360 minutes per week'],
            ['PS', 'Provider location/other location not in other category less than 360 min/wk.'],
        ],
    ];

    // Use Case version 12.0, Table 46
    // Month of the update [on Dropout Recovery Program (DRP) Tab],
    $AzSIS_SQL_Tables['DropoutRecoveryProgramMonths'] = [
        'columns' => [
            'DropoutRecoveryProgramMonthCode TINYINT UNSIGNED NOT NULL',
            'DropoutRecoveryProgramMonth VARCHAR(15) NULL DEFAULT NULL',
            'PRIMARY KEY (DropoutRecoveryProgramMonthCode)',
            'UNIQUE (DropoutRecoveryProgramMonthCode)',
            'CHECK (DropoutRecoveryProgramMonth IS NULL OR DropoutRecoveryProgramMonth<>"")'
        ],
        'values' => [
            [1, 'July'],
            [2, 'August'],
            [3, 'September'],
            [4, 'October'],
            [5, 'November'],
            [6, 'December'],
            [7, 'January'],
            [8, 'February'],
            [9, 'March'],
            [10, 'April'],
            [11, 'May'],
            [12, 'June'],
        ],
    ];

    // Use Case version 12.0, Table 47
    // Possible Staff Identification Systems
    $AzSIS_SQL_Tables['PossibleStaffIdentificationSystems'] = [
        'columns' => [
            'StaffIdentificationSystem VARCHAR(30) NOT NULL',
            'PRIMARY KEY (StaffIdentificationSystem)',
            'CHECK (StaffIdentificationSystem<>"")'
        ],
        'values' => [
            ['Canadian SIN'],
            ['District'],
            ['Drivers License'],
            ['Educator Stakeholder'],
            ['Federal'],
            ['Health Record'],
            ['Medicaid'],
            ['Other'],
            ['Other Federal'],
            ['PIN'],
            ['Professional Certificate'],
            ['School'],
            ['Selective Service'],
            ['SSN'],
            ['State'],
            ['US Visa'],
        ],
    ];

    // Use Case version 12.0, Table 48
    // Indicates the Service being provided to the student by the Program. [on Support Program Tab],
    //     see https://www.azed.gov/ESS/coordinated-early-intervening-services-ceis-faq
    $AzSIS_SQL_Tables['PossibleCoordinatedEarlyInterveningServices'] = [
        'columns' => [
            'CoordinatedEarlyInterveningServiceCode VARCHAR(25) NOT NULL',
            'CoordinatedEarlyInterveningService VARCHAR(75) NOT NULL',
            'PRIMARY KEY (CoordinatedEarlyInterveningServiceCode)',
            'UNIQUE (CoordinatedEarlyInterveningService)',
            'FOREIGN KEY (CoordinatedEarlyInterveningService) REFERENCES PossibleSupportPrograms(SupportProgram) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (CoordinatedEarlyInterveningServiceCode<>"")'
        ],
        'values' => [
            ['CEIS-Reading', 'Coordinated Early Intervening Services- Reading'],
            ['CEIS-Math', 'Coordinated Early Intervening Services- Math'],
            ['CEIS-Behavior', 'Coordinated Early Intervening Services- Behavior'],
            ['CEIS-Other', 'Coordinated Early Intervening Services- Other'],
            ['CCEIS-Reading', 'Comprehensive Coordinated Early Intervening Svcs- Reading'],
            ['CCEIS-Math', 'Comprehensive Coordinated Early Intervening Svcs- Math'],
            ['CCEIS-Behavior', 'Comprehensive Coordinated Early Intervening Svcs- Behavior'],
            ['CCEIS-Other', 'Comprehensive Coordinated Early Intervening Svcs- Other'],
        ],
    ];

    // Use Case version 12.0, Table 49
    // The final indicator of student performance in a class as submitted by the instructor
    $AzSIS_SQL_Tables['PossibleFinalLetterGradeEarnedDescriptors'] = [
        'columns' => [
            'FinalLetterGradeEarnedDescriptor VARCHAR(25) NOT NULL',
            'PRIMARY KEY (FinalLetterGradeEarnedDescriptor)',
            'CHECK (FinalLetterGradeEarnedDescriptor<>"")'
        ],
        'values' => [
            ['Above Average'],
            ['Average'],
            ['Below Average'],
        ],
    ];

    // Use Case version 12.0, Table 50
    // Possible School Responsibilities
    //     Indications of an education organization’s responsibility for a student. (IEP)
    $AzSIS_SQL_Tables['PossibleSchoolResponsibilities'] = [
        'columns' => [
            'SchoolResponsibilityCode VARCHAR(5) NOT NULL',
            'SchoolResponsibility VARCHAR(50) NOT NULL',
            'PRIMARY KEY (SchoolResponsibilityCode)',
            'UNIQUE (SchoolResponsibility)',
            'CHECK (SchoolResponsibilityCode<>"")',
            'CHECK (SchoolResponsibility<>"")'
        ],
        'values' => [
            ['IEP', 'Individualized Education Program'],
        ],
    ];

    // Use Case version 12.0, Table 51
    // The identifier assigned to an education organization. (The regular school the student would have attended if there are no SPED needs.) for each program.
    $AzSIS_SQL_Tables['PossibleAssessmentPeriods'] = [
        'columns' => [
            'AssessmentPeriodCode CHAR(6) NOT NULL',
            'AssessmentPeriod VARCHAR(75) NOT NULL',
            'PRIMARY KEY (AssessmentPeriodCode)',
            'UNIQUE (AssessmentPeriod)',
            'CHECK (AssessmentPeriodCode<>"")',
            'CHECK (AssessmentPeriod<>"")'
        ],
        'values' => [
            ['SPSE01', 'Entry'],
            ['SPSE02', 'Exit'],
        ],
    ];

    // Use Case version 12.0, Table 52
    // This descriptor holds the category of the assessment being reported on entry or exit.
    $AzSIS_SQL_Tables['PossibleAssessmentCategories'] = [
        'columns' => [
            'AssessmentCategoryCode CHAR(6) NOT NULL',
            'AssessmentCategory VARCHAR(150) NOT NULL',
            'PRIMARY KEY (AssessmentCategoryCode)',
            'UNIQUE (AssessmentCategory)',
            'CHECK (AssessmentCategoryCode<>"")',
            'CHECK (AssessmentCategory<>"")'
        ],
        'values' => [
            ['SPSC01', 'Positive social-emotional skills (including social relationships)'],
            ['SPSC02', 'Acquisition and use of knowledge and skills (including early language/ communication and early literacy)'],
            ['SPSC03', 'Use of appropriate behaviors to meet their needs'],
        ],
    ];

    // Use Case version 12.0, Table 53
    // This descriptor holds the assessment for the category being reported on entry or exit.
    $AzSIS_SQL_Tables['PossibleOutcomesSummaries'] = [
        'columns' => [
            'OutcomesSummaryCode CHAR(8) NOT NULL',
            'OutcomesSummary VARCHAR(200) NOT NULL',
            'PRIMARY KEY (OutcomesSummaryCode)',
            'UNIQUE (OutcomesSummary)',
            'CHECK (OutcomesSummaryCode<>"")',
            'CHECK (OutcomesSummary<>"")'
        ],
        'values' => [
            ['SPSOC01', 'Overall not age appropriate: Does not yet show functioning expected in any situation, does not show immediate foundational skills in any situation.'],
            ['SPSOC02', 'Overall not age appropriate: Occasionally uses immediate foundational skills across settings and situations'],
            ['SPSOC03', 'Overall not age appropriate: Uses immediate foundational skills most or all of the time across settings and situation.'],
            ['SPSOC04', 'Overall not age appropriate: Shows occasional age-appropriate functioning across settings and situations.'],
            ['SPSOC05', 'Overall not age appropriate: Shows functioning expected for his or her age some of the time and/or in some settings and situations.'],
            ['SPSOC06', 'Age appropriate: Functioning generally is considered appropriate for his or her age, but there are some significant concerns about the child’s functioning in this outcome area.'],
            ['SPSOC07', 'Age appropriate: Shows functioning expected for his or her age in all or almost all everyday situations that are part of the child’s life.'],
        ],
    ];

    // Use Case version 12.0, Table 54
    // ???
    $AzSIS_SQL_Tables['PossibleGiftedAndTalentedPrograms'] = [
        'columns' => [
            'GiftedAndTalentedProgramCode TINYINT UNSIGNED NOT NULL',
            'GiftedAndTalentedProgram VARCHAR(75) NOT NULL',
            'PRIMARY KEY (GiftedAndTalentedProgramCode)',
            'UNIQUE (GiftedAndTalentedProgram)',
            'CHECK (GiftedAndTalentedProgram<>"")'
        ],
        'values' => [
            [35, 'Gifted Program'],
        ],
    ];

    // Use Case version 12.0, Table 55
    // This descriptor holds the categories of behavior describing a discipline incident
    $AzSIS_SQL_Tables['PossibleBehaviors'] = [
        'columns' => [
            'BehaviorCode VARCHAR(25) NOT NULL',
            'Behavior VARCHAR(100) NOT NULL',
            'PRIMARY KEY (BehaviorCode)',
            'UNIQUE (Behavior)',
            'CHECK (BehaviorCode<>"")',
            'CHECK (Behavior<>"")'
        ],
        'values' => [
            ['Alcohol', 'Alcohol'],
            ['Tobacco', 'Tobacco'],
            ['Serious Bodily Injury', 'Serious Bodily Injury'],
            ['Handguns', 'Use of handgun'],
            ['Rifles/shotguns', 'Use of rifle or shotgun'],
            ['Multiple firearms', 'Use of more than one handgun/rifle/shotgun'],
            ['Other firearms', 'Any firearm other than a handgun/rifle/shotgun'],
            ['Pocket Knife', 'Pocket Knife blade less than 2.5 inches'],
            ['Drug Offense', 'Drug offense that is not alcohol or tobacco related'],
            ['Dangerous Weapon', 'Dangerous Weapon not a Pocket Knife with a blade less than 2.5 inches'],
            ['Other', 'Any offense not explicitly mentioned that violates board policy or a law'],
        ],
    ];

    // Use Case version 12.0, Table 56
    // This descriptor holds the types of Discipline actions taken on a student for a discipline incident
    $AzSIS_SQL_Tables['PossibleActions'] = [
        'columns' => [
            'ActionCode VARCHAR(100) NOT NULL',
            'Action VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ActionCode)',
            'UNIQUE (Action)',
            'CHECK (ActionCode<>"")',
            'CHECK (Action<>"")'
        ],
        'values' => [
            ['Expulsion', 'Expulsion'],
            ['In School Suspension', 'In School Suspension'],
            ['Out of School Suspension', 'Out of School Suspension'],
            ['Reassignment to alt education prog in school', 'Pupil reassignment to an alternative education program in school'],
            ['Reassignment to alt education prog out of school', 'Pupil reassignment to alt education program out of school'],
            ['Reassignment to alt suspension prog in school', 'Pupil reassignment to alternative to suspension program in school'],
            ['Reassignment to alt suspension prog out of school', 'Pupil reassignment to alternative to suspension program out of school'],
            ['Removal by Hearing Officer', 'Removal by Hearing Officer for Likely Injury to Self or Others'],
            ['Unilateral removal', 'Unilateral removal to an Interim Alternative Educational Setting'],
            ['No action for incident', 'No action for incident'],
        ],
    ];

    // Use Case version 12.0, Table 57
    // Key for Type of Activity offered [from 21st CCLC tab],
    $AzSIS_SQL_Tables['Possible21stCenturyCommunityLearningCenterActivities'] = [
        'columns' => [
            '21stCenturyCommunityLearningCenterActivityCode CHAR(11) NOT NULL',
            '21stCenturyCommunityLearningCenterActivity VARCHAR(100) NOT NULL',
            'PRIMARY KEY (21stCenturyCommunityLearningCenterActivityCode)',
            'UNIQUE (21stCenturyCommunityLearningCenterActivity)',
            'CHECK (21stCenturyCommunityLearningCenterActivityCode<>"")',
            'CHECK (21stCenturyCommunityLearningCenterActivity<>"")'
        ],
        'values' => [
            ['Activity001', 'Literacy Education'],
            ['Activity002', 'Science,Technology,Engineering, and Mathematics, including Computer Science'],
            ['Activity004', 'Healthy and Active Lifestyle'],
            ['Activity005', 'Cultural Programs'],
            ['Activity006', 'Telecommunications and Technology Education'],
            ['Activity007', 'Expanded Library Service Hours'],
            ['Activity008', 'Assistance to Students who have been Truant, Suspended, or Expelled'],
            ['Activity009', 'Drug and Violence Prevention and Counseling'],
            ['Activity010', 'Career Competencies and Career Readiness'],
            ['Activity011', 'Well-rounded Education Activities, including credit recovery or attainment'],
            ['Activity012', 'Services for Individuals with Disabilities'],
            ['Activity013', 'Activities for English Learners'],
            ['Activity014', 'Academic Enrichment - Accelerated Learning'],
            ['Activity015', 'Academic Enrichment - Mentoring Program'],
            ['Activity016', 'Academic Enrichment - Remedial Education or Tutoring Services'],
            ['Activity017', 'Financial Literacy'],
        ],
    ];

    // Use Case version 12.0, Table 58
    // The rating or response provided to an objective
    $AzSIS_SQL_Tables['Possible21stCenturyCommunityLearningRatings'] = [
        'columns' => [
            '21stCenturyCommunityLearningRatingCode TINYINT UNSIGNED NOT NULL',
            '21stCenturyCommunityLearningRating VARCHAR(50) NOT NULL',
            'PRIMARY KEY (21stCenturyCommunityLearningRatingCode)',
            'UNIQUE (21stCenturyCommunityLearningRating)',
            'CHECK (21stCenturyCommunityLearningRating<>"")'
        ],
        'values' => [
            [1, 'Decreased'],
            [2, 'Remained the same'],
            [3, 'Improved'],
            [4, 'Did not need to improve'],
        ],
    ];

    // Use Case version 12.0, Table 59
    // The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies.
    $AzSIS_SQL_Tables['PossibleHomelessPrograms'] = [
        'columns' => [
            'HomelessProgram VARCHAR(75) NOT NULL',
            'PRIMARY KEY (HomelessProgram)',
            'CHECK (HomelessProgram<>"")'
        ],
        'values' => [
            ['Homeless'],
        ],
    ];

    // Use Case version 12.0, Table 60
    // The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies.
    $AzSIS_SQL_Tables['PossibleNationalSchoolLunchPrograms'] = [
        'columns' => [
            'NationalSchoolLunchProgram VARCHAR(75) NOT NULL',
            'PRIMARY KEY (NationalSchoolLunchProgram)',
            'CHECK (NationalSchoolLunchProgram<>"")'
        ],
        'values' => [
            ['National School Lunch Program and School Breakfast Program'],
        ],
    ];

    // Use Case version 12.0, Table 61
    // A unique alpha-numeric code assigned to a student by the state. [Food Service Program (NSLP) tab],
    $AzSIS_SQL_Tables['PossibleNationalSchoolLunchProgramEligibilitySources'] = [
        'columns' => [
            'NationalSchoolLunchProgramAEligibilitySource VARCHAR(75) NOT NULL',
            'PRIMARY KEY (NationalSchoolLunchProgramAEligibilitySource)',
            'CHECK (NationalSchoolLunchProgramAEligibilitySource<>"")'
        ],
        'values' => [
            ['Direct Certification'],
            ['USDA Income Application'],
            ['Other Source Categorically Eligible'],
        ],
    ];

    // Use Case version 12.0, Table 62
    // EducationOrganization Identity Column [Food Service Program (NSLP) tab],
    $AzSIS_SQL_Tables['PossibleNationalSchoolLunchProgramEligibilityStatuses'] = [
        'columns' => [
            'NationalSchoolLunchProgramAEligibilityStatus VARCHAR(75) NOT NULL',
            'PRIMARY KEY (NationalSchoolLunchProgramAEligibilityStatus)',
            'CHECK (NationalSchoolLunchProgramAEligibilityStatus<>"")'
        ],
        'values' => [
            ['Free'],
            ['Reduced-Price'],
            ['Full Pay'],
        ],
    ];

    // Use Case version 12.0, Table 63
    // Unique Descriptor Id for the reason a student has exited an IFSP
    $AzSIS_SQL_Tables['PossibleIndividualizedFamilyServicePlanExitReasons'] = [
        'columns' => [
            'IndividualizedFamilyServicePlanExitReasonCode VARCHAR(100) NOT NULL',
            'IndividualizedFamilyServicePlanExitReason VARCHAR(100) NOT NULL',
            'PRIMARY KEY (IndividualizedFamilyServicePlanExitReasonCode)',
            'CHECK (IndividualizedFamilyServicePlanExitReasonCode<>"")',
            'CHECK (IndividualizedFamilyServicePlanExitReason<>"")'
        ],
        'values' => [
            ['Attempts to contact unsuccessful', 'Attempts to contact unsuccessful'],
            ['Child Eligible Family declines IFSP', 'Child Eligible Family declines IFSP'],
            ['Child resides outside of Arizona', 'Child resides outside of Arizona'],
            ['Child screened out', 'Child screened out'],
            ['Deceased', 'Deceased'],
            ['Duplicate referral', 'Duplicate referral'],
            ['Eligible for IDEA Part B', 'Eligible for IDEA Part B'],
            ['Evaluation Complete Child not eligible', 'Evaluation Complete Child not eligible'],
            ['Family Declines EI Now', 'Family not Interested in Early Intervention at this time'],
            ['Moved out of State', 'Moved out of State'],
            ['Not eligible for Part B Exit with no referrals', 'Not eligible for PartB Exit with no referrals'],
            ['Part B eligibility not determined', 'Part B eligibility not determined'],
            ['Prt B Inelig Exit with referrals to other programs', 'Not eligible for Part B Exit with referrals to other programs'],
            ['Prt C Inelig prior to age 3', 'No longer eligible for Part C prior to reaching age three'],
            ['Prt/Gdn Withdrawal', 'Withdrawal by parent (or guardian)'],
        ],
    ];

    // Use Case version 12.0, Table 64
    // Unique Descriptor Id for the reason the scheduled meeting is delayed
    $AzSIS_SQL_Tables['PossibleIndividualizedFamilyServicePlanDelayReasons'] = [
        'columns' => [
            'IndividualizedFamilyServicePlanDelayReasonCode VARCHAR(100) NOT NULL',
            'IndividualizedFamilyServicePlanDelayReason VARCHAR(100) NOT NULL',
            'PRIMARY KEY (IndividualizedFamilyServicePlanDelayReasonCode)',
            'CHECK (IndividualizedFamilyServicePlanDelayReasonCode<>"")',
            'CHECK (IndividualizedFamilyServicePlanDelayReason<>"")'
        ],
        'values' => [
            ['Family changed view', 'Family changed view'],
            ['Family delay', 'Family delay'],
            ['Parent not available', 'Parent not available'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleEthnicGroups'] = [
        'columns' => [
            'EthnicGroup VARCHAR(75) NOT NULL',
            'IsHispanicOrLatino BOOLEAN NOT NULL',
            'PRIMARY KEY (EthnicGroup)',
            'CHECK (EthnicGroup<>"")'
        ],
        'values' => [
            ['American Indian or Alaska Native', 0],
            ['Asian', 0],
            ['Black or African American', 0],
            ['Hispanic or Latino', 1],
            ['Native Hawaiian or Other Pacific Islander', 0],
            ['Not Specified or Other', 0],
            ['White', 0],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleDepartments'] = [
        'columns' => [
            'DepartmentCode VARCHAR(4) NOT NULL',
            'Department VARCHAR(35) NOT NULL',
            'DepartmentForGradeCards VARCHAR(35) NOT NULL',
            'DepartmentDescriptionForGradecards VARCHAR(35) NULL DEFAULT NULL',
            'DepartmentForMapTest VARCHAR(35) NULL DEFAULT NULL',
            'DepartmentForTranscripts VARCHAR(35) NOT NULL',
            'PRIMARY KEY (DepartmentCode)',
            'UNIQUE (Department)',
            'UNIQUE (DepartmentForGradeCards)',
            'UNIQUE (DepartmentDescriptionForGradecards)',
            'UNIQUE (DepartmentForMapTest)',
            'UNIQUE (DepartmentForTranscripts)',
            'CHECK (DepartmentCode<>"")',
            'CHECK (Department<>"")',
            'CHECK (DepartmentForGradeCards<>"")',
            'CHECK (DepartmentDescriptionForGradecards IS NULL OR DepartmentDescriptionForGradecards<>"")',
            'CHECK (DepartmentForMapTest IS NULL OR DepartmentForMapTest<>"")',
            'CHECK (DepartmentForTranscripts<>"")'
        ],
        'values' => [
            ['ART', 'Fine Arts', 'Fine Arts', null, null, 'Fine Arts'],
            ['ELEC', 'Elect', 'Elect', null, null, 'Elective'],
            ['FORL', 'Foreign Language', 'Foreign Language', null, null, 'Foreign Language'],
            ['HMWK', 'Homework', 'Homework', null, null, 'Homework'],
            ['HUM', 'Humanities', 'Humanities', null, null, 'Humanities'],
            ['LART', 'Language Arts', 'ELA', 'English Language Arts', 'English/language arts', 'English Language Arts'],
            ['MATH', 'Mathematics', 'Mathematics', null, null, 'Mathematics'],
            ['MISC', 'Miscellaneous', 'Miscellaneous', null, null, 'Miscellaneous'],
            ['PE', 'Physical Education', 'Physical Education', null, null, 'Physical Education'],
            ['POLI', 'Political Science', 'Social Studies', null, null, 'Social Studies'],
            ['SCI', 'Science', 'Science & Technology', null, null, 'Science'],
            ['SPED', 'Special Education', 'Special Education', null, null, 'Special Education'],
            ['TECH', 'Technology', 'Technology', null, null, 'Technology'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleGradingTypes'] = [
        'columns' => [
            'GradingType CHAR(5) NOT NULL',
            'PRIMARY KEY (GradingType)',
            'CHECK (GradingType<>"")'
        ],
        'values' => [
            ['ABCDF'],
            ['ABCII'],
            ['ABIII'],
            ['PPPFF'],
            ['PPPPF'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleScoringTypes'] = [
        'columns' => [
            'ScoringType CHAR(3) NOT NULL',
            'ScoringTypeDescription VARCHAR(25) NOT NULL',
            'PRIMARY KEY (ScoringType)',
            'UNIQUE (ScoringTypeDescription)',
            'CHECK (ScoringType<>"")',
            'CHECK (ScoringTypeDescription<>"")'
        ],
        'values' => [
            ['Avg', 'Average Scores'],
            ['Cut', 'Count Masteries'],
            ['Sum', 'Add Scores'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAttendanceTypes'] = [
        'columns' => [
            'AttendanceType VARCHAR(15) NOT NULL',
            'PRIMARY KEY (AttendanceType)',
            'CHECK (AttendanceType<>"")'
        ],
        'values' => [
            ['Absent'],
            ['Present'],
            ['Tardy'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleRankGradeLevels'] = [
        'columns' => [
            'RankGradeLevelCode CHAR(3) NOT NULL',
            'RankGradeLevelName VARCHAR(25) NOT NULL',
            'RankGradeLevelSortNumber TINYINT NOT NULL',
            'PRIMARY KEY (RankGradeLevelCode)',
            'UNIQUE (RankGradeLevelName)',
            'UNIQUE (RankGradeLevelSortNumber)',
            'CHECK (RankGradeLevelCode<>"")',
            'CHECK (RankGradeLevelName<>"")'
        ],
        'values' => [
            ['ABG', 'Above Grade Level', -1],
            ['ATG', 'At Grade Level', 0],
            ['BLG', 'Below Grade Level', 1],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAssessmentAnswers'] = [
        'columns' => [
            'AssessmentAnswerCode CHAR(1) NOT NULL',
            'AssessmentAnswerName VARCHAR(10) NOT NULL',
            'AssessmentAnswerValue TINYINT NOT NULL',
            'PRIMARY KEY (AssessmentAnswerCode)',
            'UNIQUE (AssessmentAnswerName)',
            'UNIQUE (AssessmentAnswerValue)',
            'UNIQUE (AssessmentAnswerValue)',
            'CHECK (AssessmentAnswerCode<>"")',
            'CHECK (AssessmentAnswerName<>"")'
        ],
        'values' => [
            ['H', 'High', 1],
            ['L', 'Low', 0],
            ['M', 'Medium', -1],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleApTests'] = [
        'columns' => [
            'ApExamCode TINYINT UNSIGNED NOT NULL',
            'ApExamName VARCHAR(100) NOT NULL',
            'ApDiscontinuedYear YEAR NULL DEFAULT NULL',
            'PRIMARY KEY (ApExamCode)',
            'UNIQUE (ApExamName)',
            'CHECK (ApExamName<>"")',
            'CHECK (ApDiscontinuedYear>0)'
        ],
        'values' => [
            [7, 'United States History', null],
            [13, 'Art History', null],
            [14, 'Drawing', null],
            [15, '2-D Art and Design', null],
            [16, '3-D Art and Design', null],
            [20, 'Biology', null],
            [22, 'Seminar', null],
            [23, 'Research', null],
            [25, 'Chemistry', null],
            [28, 'Chinese Language and Culture', null],
            [31, 'Computer Science A', null],
            [32, 'Computer Science Principles', null],
            [33, 'Computer Science AB', 2010],
            [34, 'Microeconomics', null],
            [35, 'Macroeconomics', null],
            [36, 'English Language and Composition', null],
            [37, 'English Literature and Composition', null],
            [40, 'Environmental Science', null],
            [43, 'European History', null],
            [48, 'French Language and Culture', null],
            [51, 'French Literature', 2010],
            [53, 'Human Geography', null],
            [55, 'German Language and Culture', null],
            [57, 'United States Government and Politic', null],
            [58, 'Comparative Government and Politics', null],
            [60, 'Latin', null],
            [61, 'Latin Literature', 2010],
            [62, 'Italian Language and Culture', null],
            [64, 'Japanese Language and Culture', null],
            [65, 'Precalculus', null],
            [66, 'Calculus AB', null],
            [68, 'Calculus BC', null],
            [69, 'Calculus BC: AB Subscore', null],
            [75, 'Music Theory', null],
            [76, 'Music Aural Subscore', null],
            [77, 'Music Non-Aural Subscore', null],
            [78, 'Physics B', 2014],
            [80, 'Physics C: Mechanics', 0000],
            [82, 'Physics C: Electricity and Magnetism', null],
            [83, 'Physics 1', null],
            [84, 'Physics 2', null],
            [85, 'Psychology', null],
            [87, 'Spanish Language and Culture', null],
            [89, 'Spanish Literature and Culture', null],
            [90, 'Statistics', null],
            [93, 'World History: Modern', null],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleApAwards'] = [
        'columns' => [
            'ApAwardCode TINYINT UNSIGNED NOT NULL',
            'ApAwardName VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ApAwardCode)',
            'UNIQUE (ApAwardName)',
            'CHECK (ApAwardName<>"")'
        ],
        'values' => [
            [1, 'AP Scholar'],
            [2, 'AP Scholar with Honor'],
            [3, 'AP Scholar with Distinction'],
            [4, 'State AP Scholar'],
            [5, 'National AP Scholar'],
            [6, 'National AP Scholar (Canada)'],
            [7, 'AP International Diploma'],
            [8, 'DoDEA AP Scholar'],
            [9, 'International AP Scholar'],
            [12, 'National AP Scholar (Bermuda)'],
            [13, 'AP Capstone Diploma'],
            [14, 'AP Seminar and Research Certificate'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAlertTypes'] = [
        'columns' => [
            'AlertType VARCHAR(50) NOT NULL',
            'AlertTypeIsSensitive BOOLEAN NOT NULL',
            'AlertTypeIcon MEDIUMBLOB NOT NULL',
            'AlertLabel1 VARCHAR(50) NULL DEFAULT NULL',
            'AlertLabel2 VARCHAR(50) NULL DEFAULT NULL',
            'AlertLabel3 VARCHAR(50) NULL DEFAULT NULL',
            'AlertLabel4 VARCHAR(50) NULL DEFAULT NULL',
            'PRIMARY KEY (AlertType)',
            'CHECK (AlertType<>"")',
            'CHECK (AlertLabel1 IS NULL OR AlertLabel1<>"")',
            'CHECK (AlertLabel2 IS NULL OR AlertLabel2<>"")',
            'CHECK (AlertLabel3 IS NULL OR AlertLabel3<>"")',
            'CHECK (AlertLabel4 IS NULL OR AlertLabel4<>"")'
        ],
        'values' => [
            ['Allergy', 0, '', 'Allergen', 'Reaction', 'Treatment', 'Date of Last Occurrence'],
            ['Food Intolerance or Issue', 0, '', 'Food', 'Reaction', 'Treatment', 'Date of Last Occurrence'],
            ['Legal', 0, '', 'Issue', 'Notes', null, null],
            ['Medical Issue', 0, '', 'Issue', 'Notes', null, null],
            ['No Over-the-Counter Medication', 0, '', null, null, null, null],
            ['No Photography', 0, '', null, null, null, null],
            ['Private Legal', 1, '', 'Issue', 'Notes', null, null],
            ['Private Medical Issue', 1, '', 'Issue', 'Notes', null, null],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleLogs'] = [
        'columns' => [
            'Log VARCHAR(25) NOT NULL',
            'LogIsSensitive BOOLEAN NOT NULL',
            'LogIcon MEDIUMBLOB NOT NULL',
            'PRIMARY KEY (Log)',
            'CHECK (Log<>"")'
        ],
        'values' => [
            ['Illness', 0, ''],
            ['Injury', 0, ''],
            ['Minor Infraction', 0, ''],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleVaccines'] = [
        'columns' => [
            'VaccineCode VARCHAR(30) NOT NULL',
            'Vaccine VARCHAR(100) NOT NULL',
            'VaccineSortNumber INT NOT NULL',
            'PRIMARY KEY (VaccineCode)',
            'UNIQUE (Vaccine)',
            'UNIQUE (VaccineSortNumber)',
            'CHECK (VaccineCode<>"")',
            'CHECK (Vaccine<>"")'
        ],
        'values' => [
            ['HepB', 'Hepatitis B', 1],
            ['Polio', 'Poliomyelitis (IPV or OPV)', 2],
            ['MMR', 'Measles, Mumps and Rubella', 3],
            ['VAR', 'Varicella (chickenpox)', 4],
            ['DTaP, Tdap, Td', 'Diphtheria, Tetanus, and Pertussis', 5],
            ['MenACWY, MenABCWY or MCV4', 'Meningococcal', 6],
            ['HIB', 'Haemophilus Influenzae Type b', -1],
            ['HepA', 'Hepatitis A', -2],
            ['FLU', 'Influenza', -3],
            ['TB', 'TB Skin Test', -4],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleVaccinationStatuses'] = [
        'columns' => [
            'VaccinationStatus VARCHAR(50) NOT NULL',
            'VaccinationIsVerfied BOOLEAN NOT NULL',
            'VaccinationIsComplete BOOLEAN NOT NULL',
            'VaccinationHasBeenWaived BOOLEAN NOT NULL',
            'PRIMARY KEY (VaccinationStatus)',
            'CHECK (VaccinationStatus<>"")'
        ],
        'values' => [
            ['Completed', 1, 1, 0],
            ['Completed (Documents Pending)', 0, 1, 0],
            ['Incomplete', 1, 0, 0],
            ['Not Needed', 0, 1, 0],
            ['Unknown', 0, 0, 0],
            ['Waived', 1, 0, 1],
            ['Waived (Documents Pending)', 0, 0, 1],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleResidencyDocumentTypes'] = [
        'columns' => [
            'ResidencyDocumentType VARCHAR(255) NOT NULL',
            'PRIMARY KEY (ResidencyDocumentType)',
            'CHECK (ResidencyDocumentType<>"")'
        ],
        'values' => [
            ['Administration, Veteran’s Administration, Arizona Department of Economic Security)'],
            ['An original affidavit signed and notarized by an Arizona resident attesting to established residence in Arizona with the person signing the affidavit'],
            ['Bank or credit card statement'],
            ['Certificate of tribal enrollment (506 Form) or other identification issued by a recognized Indian tribe inArizona'],
            ['Documentation from a state, tribal or federal government agency (Social Security'],
            ['Payroll stub'],
            ['Property tax bill'],
            ['Real estate deed or mortgage documents'],
            ['Residential lease or rental agreement'],
            ['Temporary on-base billeting facility (for military families)'],
            ['Valid Arizona Address Confidentiality Program authorization card'],
            ['Valid Arizona driver’s license, Arizona identification card or motor vehicleregistration'],
            ['W-2 wage statement'],
            ['Water, electric, gas, cable, or phone bill'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleFileTypes'] = [
        'columns' => [
            'FileType VARCHAR(100) NOT NULL',
            'PRIMARY KEY (FileType)',
            'CHECK (FileType<>"")'
        ],
        'values' => [
            ['application/pdf'],
            ['application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
            ['image/bmp'],
            ['image/gif'],
            ['image/jpeg'],
            ['image/png'],
            ['image/svg+xml'],
            ['image/tiff'],
            ['image/vnd.djvu'],
            ['image/vnd.microsoft.icon'],
            ['image/x-icon'],
        ],
    ];

    $AzSIS_SQL_Tables['PossiblePhoneNumberTypes'] = [
        'columns' => [
            'PhoneNumberType VARCHAR(25) NOT NULL',
            'PhoneNumberTypeSortNumber TINYINT UNSIGNED NOT NULL',
            'PRIMARY KEY (PhoneNumberType)',
            'UNIQUE (PhoneNumberTypeSortNumber)',
            'CHECK (PhoneNumberType<>"")'
        ],
        'values' => [
            ['Cell', 0],
            ['Fax', 3],
            ['Other', 4],
            ['Residence', 1],
            ['Work', 2],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleLocalEducationAgencies'] = [
        'columns' => [
            'LocalEducationAgencyId INT UNSIGNED NOT NULL',
            'LocalEducationOrganizationName VARCHAR(100) NOT NULL',
            'LocalEducationAgencyCategory VARCHAR(50) NOT NULL',
            'PRIMARY KEY (LocalEducationAgencyId)',
            'UNIQUE (LocalEducationOrganizationName)',
            'FOREIGN KEY (LocalEducationAgencyCategory) REFERENCES PossibleLocalEducationAgencyCategories(LocalEducationAgencyCategory) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (LocalEducationOrganizationName<>"")'
        ],
        'values' => [
            [6364, 'Accelerated Elementary and Secondary Schools', 'Private District'],
        ],
    ];

    // https://nces.ed.gov/ccd/schoolsearch/school_detail.asp
    $AzSIS_SQL_Tables['PossibleSchools'] = [
        'columns' => [
            'SchoolId INT NOT NULL',
            'SchoolName VARCHAR(50) NOT NULL',
            'LocalEducationAgencyId INT UNSIGNED NULL DEFAULT NULL',
            'SchoolType VARCHAR(50) NULL DEFAULT NULL',
            'CEEBCode CHAR(6) NULL DEFAULT NULL',
            'ActSchoolOrgNumber CHAR(6) NULL DEFAULT NULL',
            'SchoolIsManagedByUs BOOLEAN NOT NULL DEFAULT FALSE',
            'SchoolSortNumber DECIMAL(7,3) NULL DEFAULT NULL',
            'PRIMARY KEY (SchoolId)',
            'UNIQUE (SchoolName)',
            'UNIQUE (CEEBCode)',
            'UNIQUE (ActSchoolOrgNumber)',
            'UNIQUE (SchoolSortNumber)',
            'FOREIGN KEY (LocalEducationAgencyId) REFERENCES PossibleLocalEducationAgencies(LocalEducationAgencyId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolType) REFERENCES PossibleSchoolTypes(SchoolType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (SchoolName<>"")',
            'CHECK (CEEBCode IS NULL OR CEEBCode<>"")',
            'CHECK (ActSchoolOrgNumber IS NULL OR ActSchoolOrgNumber<>"")'
        ],
        'values' => [
            [5891, 'Accelerated Learning Laboratory', 6364, 'Private', '030551', '030551', 1, 2],
            [6364, 'Green Fields', 6364, 'Private', '030487', '977044', 1, 1],
            [5782, 'Mountain View High School', null, 'Public', null, null, 0, null],
            [91292, 'Andrada Polytechnic High School', null, 'Public', null, null, 0, null],
            [81182, 'Hope High School Online', null, 'Public', null, null, 0, null],
            [79378, 'Ironwood Ridge High School', null, 'Public', null, null, 0, null],
            [79127, 'Sonoran Science Academy', null, 'Public Charter', null, null, 0, null],
            [10885, 'Mountain Rose Academy', null, 'Public Charter', null, null, 0, null],
            [5839, 'Catalina Foothills High School', null, 'Public', null, null, 0, null],
            [5808, 'Canyon del Oro High School', null, 'Public', null, null, 0, null],
            [-8, 'Independent Study', null, null, null, null, 1, 3],
            [5760, 'Rincon High School', null, 'Public', null, null, 0, null],
            [-1, 'homeschool', null, 'Homeschool', null, null, 0, 9999.001],
            [-2, 'out of state', null, null, null, null, 0, 9999.002],
            [-3, 'Pima Community College', null, null, null, null, 0, null],
            [-4, 'Independent AP Study', null, null, null, null, 1, 4],
            [-5, 'PIMA JTED', null, null, null, null, 0, null],
            [-6, 'Team Sports', null, null, null, null, 0, null],
            [-7, 'Tucson Unified Virtual Academy', null, null, null, null, 0, null],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleSchoolAwards'] = [
        'columns' => [
            'SchoolAwardType VARCHAR(50) NOT NULL',
            'SchoolAwardOnTranscript BOOLEAN NOT NULL',
            'SchoolAwardDescription VARCHAR(100) NULL DEFAULT NULL',
            'PRIMARY KEY (SchoolAwardType)',
            'UNIQUE (SchoolAwardDescription)',
            'CHECK (SchoolAwardType<>"")',
            'CHECK (SchoolAwardDescription IS NULL OR SchoolAwardDescription<>"")',
        ],
        'values' => [
            ['Internship', 1, null],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAssessmentQuestions'] = [
        'columns' => [
            'AssessmentQuestion VARCHAR(100) NOT NULL',
            'AssessmentQuestionSortNumber DECIMAL(7,3) NOT NULL',
            'AssessmentQuestionIsActive BOOLEAN NOT NULL DEFAULT TRUE',
            'PRIMARY KEY (AssessmentQuestion)',
            'UNIQUE (AssessmentQuestionSortNumber,AssessmentQuestionIsActive)',
            'CHECK (AssessmentQuestion<>"")'
        ],
        'values' => [
            ['Agreeable, Concerned about others, Good Intentions', 1.000, 0],
            ['Aware of the effect of “reciprocal shaping” on student-teacher rapport', 1.100, 0],
            ['Self-confident', 1.000, 1],
            ['Aware of “Locus of Control” concept, initiates challenging but realistic goals centered on effort', 2.000, 1],
            ['Self-monitors attention (arousal, focus, intensity) and adjusts relative to need', 2.000, 0],
            ['Cooperative, Willingness to compromise, Self-confident', 2.100, 0],
            ['Exhibits High-drive, Persistent Through Difficulty', 3.000, 1],
            ['Optimistic, Trusting, Unselfish, Helpful, Impartial', 3.000, 0],
            ['Conscientious, Thinks before acting, Makes Wise Decisions', 4.000, 0],
            ['Reflects upon progress towards goals, reassesses effectiveness of strategies, readjusts strategies', 4.000, 1],
            ['Conscientious, Thinks Before Acting, Cooperative', 5.000, 1],
            ['Recognizes personal and physical resources that can be used to creatively solve problems', 5.000, 0],
            ['Plans Ahead, Resists Impulses, High Self-control', 5.100, 0],
            ['Self-monitors attentional level (arousal, focus, intensity) and adjusts relative to need', 6.000, 1],
            ['Goal Oriented, Strong Self-efficacy, Self-disciplined', 6.000, 0],
            ['High-drive, Persists Through Difficulty, Common Sense', 7.000, 0],
            ['Plans Ahead, Resists Impulses, Exhibits Self-control', 7.000, 1],
            ['Organized, Manages Time Effectively, Orderly', 8.000, 0],
            ['Open to Ideas and Experiences, Adventurous, Creative', 9.000, 0],
            ['Organized, Manages Time Effectively, Completes Work', 8.000, 1],
            ['Recognizes the difference between impulsive behavior (feel like) and intentional behavior (want)', 9.000, 1],
            ['Reflects upon progress towards a goal, reassesses effectiveness of strategies, readjusts strategies', 9.100, 0],
            ['Has knowledge of “Task End Analysis” strategies and independently initiates', 10.000, 1],
            ['Reliable, Hard-working, Completes Work On-time', 10.000, 0],
            ['Employs prior knowledge and experiences to plan, regulate, monitor, and evaluate own learning', 10.100, 0],
            ['Plans, monitors, evaluates, and regulates own learning', 11.000, 1],
            ['Accurately appraises the time and effort requirements of a task and plans appropriately', 12.000, 1],
            ['Exhibits Effortful Control, Empathetic Facility, Adaptability', 13.000, 1],
            ['Aware of various nonverbal communications and shifts attention appropriately without distraction', 14.000, 1],

        ],
    ];

    $AzSIS_SQL_Tables['PossibleAimsProficiencyLevels'] = [
        'columns' => [
            'AimsProficiencyLevelCode TINYINT UNSIGNED NOT NULL',
            'AimsProficiencyLevel VARCHAR(25) NOT NULL',
            'PRIMARY KEY (AimsProficiencyLevelCode)',
            'UNIQUE (AimsProficiencyLevel)',
            'CHECK (AimsProficiencyLevel<>"")'
        ],
        'values' => [
            [1, 'Falls Far Below'],
            [2, 'Approaches'],
            [3, 'Meets'],
            [4, 'Exceeds'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAimsSubtests'] = [
        'columns' => [
            'AimsSubtestCode CHAR(1) NOT NULL',
            'AimsSubtest VARCHAR(25) NOT NULL',
            'PRIMARY KEY (AimsSubtestCode)',
            'UNIQUE (AimsSubtest)',
            'CHECK (AimsSubtestCode<>"")',
            'CHECK (AimsSubtest<>"")'
        ],
        'values' => [
            ['M', 'Math'],
            ['R', 'Reading'],
            ['W', 'Writing'],
            ['S', 'Science'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAzellaProficiencyLevels'] = [
        'columns' => [
            'AzellaProficiencyLevelCode VARCHAR(10) NOT NULL',
            'AzellaProficiencyLevel VARCHAR(50) NOT NULL',
            'PRIMARY KEY (AzellaProficiencyLevelCode)',
            'UNIQUE (AzellaProficiencyLevel)',
            'CHECK (AzellaProficiencyLevelCode<>"")',
            'CHECK (AzellaProficiencyLevel<>"")'

        ],
        'values' => [
            ['PE', 'Pre-Emergent'],
            ['E', 'Emergent'],
            ['B', 'Basic'],
            ['I', 'Intermediate'],
            ['P', 'Proficient'],
            ['PE/E/B', 'Pre-Emergent/Emergent/Basic'],
        ],
    ];

    $AzSIS_SQL_Tables['PossibleAzellaTests'] = [
        'columns' => [
            'AzellaTest VARCHAR(25) NOT NULL',
            'PRIMARY KEY (AzellaTest)',
            'CHECK (AzellaTest<>"")'

        ],
        'values' => [
            ['Overall'],
            ['Oral'],
            ['Reading'],
            ['Writing'],
            ['Listening'],
            ['Speaking'],
        ],
    ];

    //----------------------------------------------------------------------------------------

    // TODO: add to doctor
    //         'CHECK ( (BirthStateAbbreviation IS NOT NULL OR BirthCountryCode<>"US") AND (BirthStateAbbreviation IS NULL OR BirthCountryCode="US") )'
    $AzSIS_SQL_Tables['Students'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'SaisId INT UNSIGNED NULL DEFAULT NULL',
            'SevisId CHAR(11) NULL DEFAULT NULL',
            'FirstName VARCHAR(75) NOT NULL',
            'MiddleName VARCHAR(75) NULL DEFAULT NULL',
            'LastName VARCHAR(75) NOT NULL',
            'GenerationCodeSuffix VARCHAR(10) NULL DEFAULT NULL',
            'PersonalTitlePrefix VARCHAR(10) NULL DEFAULT NULL',
            'Sex VARCHAR(50) NOT NULL',
            'BirthDate DATE NOT NULL',
            'BirthStateAbbreviation VARCHAR(15) NULL DEFAULT NULL',
            'BirthCountryCode CHAR(2) NULL',
            'Address VARCHAR(1024) NULL DEFAULT NULL',
            'StudentGoogleId CHAR(21) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId)',
            'UNIQUE (SaisId)',
            'UNIQUE (SevisId)',
            'UNIQUE (StudentGoogleId)',
            'FOREIGN KEY (GenerationCodeSuffix) REFERENCES PossibleGenerationCodeSuffixes(GenerationCodeSuffix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (PersonalTitlePrefix) REFERENCES PossiblePersonalTitlePrefixes(PersonalTitlePrefix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (Sex) REFERENCES PossibleSexes(Sex) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (BirthStateAbbreviation) REFERENCES PossibleStates(StateAbbreviation) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (BirthCountryCode) REFERENCES PossibleCountries(CountryCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (SevisId IS NULL OR SevisId<>"")',
            'CHECK (FirstName<>"")',
            'CHECK (MiddleName IS NULL OR MiddleName<>"")',
            'CHECK (LastName<>"")'
        ],
        'values' => null,
    ];

    // TODO: add to doctor
    //     make sure there are three or 0 languages for each students
    $AzSIS_SQL_Tables['StudentLanguages'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'LanguageUse VARCHAR(35) NOT NULL',
            'LanguageCode SMALLINT UNSIGNED NOT NULL',
            'PRIMARY KEY (StudentId,LanguageUse)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (LanguageUse) REFERENCES PossibleLanguageUses(LanguageUse) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (LanguageCode) REFERENCES PossibleLanguages(LanguageCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add to doctor
    //         'CHECK (PersonalTitlePrefix IS NOT NULL OR FirstName IS NOT NULL OR MiddleName IS NOT NULL OR LastName IS NOT NULL OR GenerationCodeSuffix IS NOT NULL)'
    $AzSIS_SQL_Tables['StudentOtherNames'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'OtherNameType VARCHAR(30) NOT NULL',
            'PersonalTitlePrefix VARCHAR(10) NULL DEFAULT NULL',
            'FirstName VARCHAR(75) NULL DEFAULT NULL',
            'MiddleName VARCHAR(75) NULL DEFAULT NULL',
            'LastName VARCHAR(75) NULL DEFAULT NULL',
            'GenerationCodeSuffix VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,OtherNameType)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (OtherNameType) REFERENCES PossibleOtherNameTypes(OtherNameType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (PersonalTitlePrefix) REFERENCES PossiblePersonalTitlePrefixes(PersonalTitlePrefix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GenerationCodeSuffix) REFERENCES PossibleGenerationCodeSuffixes(GenerationCodeSuffix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (FirstName IS NULL OR FirstName<>"")',
            'CHECK (MiddleName IS NULL OR MiddleName<>"")',
            'CHECK (LastName IS NULL OR LastName<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StudentRaces'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'RaceCode VARCHAR(50) NOT NULL',
            'PRIMARY KEY (StudentId,RaceCode)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (RaceCode) REFERENCES PossibleRaces(RaceCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StudentEthnicGroups'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'EthnicGroup VARCHAR(75) NOT NULL',
            'PRIMARY KEY (StudentId,EthnicGroup)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (EthnicGroup) REFERENCES PossibleEthnicGroups(EthnicGroup) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: doctor ensure no overlap of same characteristics
    $AzSIS_SQL_Tables['StudentCharacteristics'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'StudentCharacteristicCode SMALLINT UNSIGNED NOT NULL',
            'StudentCharacteristicBeginDate DATE NOT NULL',
            'StudentCharacteristicEndDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,StudentCharacteristicCode,StudentCharacteristicBeginDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StudentCharacteristicCode) REFERENCES PossibleStudentCharacteristics(StudentCharacteristicCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (StudentCharacteristicEndDate IS NULL OR (StudentCharacteristicEndDate >= StudentCharacteristicBeginDate))'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StudentTribalAffiliations'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'TribalAffiliationCode VARCHAR(50) NOT NULL',
            'PRIMARY KEY (StudentId,TribalAffiliationCode)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TribalAffiliationCode) REFERENCES PossibleTribalAffiliations(TribalAffiliationCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StudentPictures'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'FileType VARCHAR(100) NOT NULL',
            'Picture LONGBLOB NOT NULL',
            'PRIMARY KEY (StudentId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: doctor FileType is NULL iff FileData is NULL iff FileName is NULL
    $AzSIS_SQL_Tables['Vaccinations'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'VaccineCode VARCHAR(30) NOT NULL',
            'VaccinationStatus VARCHAR(50) NOT NULL',
            'VaccineDose1Date DATE NULL DEFAULT NULL',
            'VaccineDose2Date DATE NULL DEFAULT NULL',
            'VaccineDose3Date DATE NULL DEFAULT NULL',
            'VaccineDose4Date DATE NULL DEFAULT NULL',
            'VaccineDose5Date DATE NULL DEFAULT NULL',
            'VaccineDose6Date DATE NULL DEFAULT NULL',
            'DiseaseDate DATE NULL DEFAULT NULL',
            'VaccineComment VARCHAR(511) NULL DEFAULT NULL',
            'FileName VARCHAR(255) NULL DEFAULT NULL',
            'FileType VARCHAR(100) NULL DEFAULT NULL',
            'FileData LONGBLOB NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,VaccineCode)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (VaccineCode) REFERENCES PossibleVaccines(VaccineCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (VaccinationStatus) REFERENCES PossibleVaccinationStatuses(VaccinationStatus) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (VaccineComment IS NULL OR VaccineComment<>"")',
            'CHECK ( (FileName IS NULL AND FileData IS NULL) OR (FileName IS NOT NULL AND FileData IS NOT NULL) )'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SupportNeeds'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'SupportNeedCode TINYINT UNSIGNED NOT NULL',
            'SupportNeedEntryDate DATE NOT NULL',
            'SupportNeedExitDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,SupportNeedCode,SupportNeedEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SupportNeedCode) REFERENCES PossibleSupportNeeds(SupportNeedCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SpecialEducationNeeds'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'SpecialEducationNeedCode VARCHAR(10) NOT NULL',
            'SpecialEducationNeedEntryDate DATE NOT NULL',
            'SpecialEducationNeedExitDate DATE NULL DEFAULT NULL',
            'PrimarySpedNeedIndicator BOOLEAN NOT NULL',
            'PRIMARY KEY (StudentId,SpecialEducationNeedCode,SpecialEducationNeedEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SpecialEducationNeedCode) REFERENCES PossibleSpecialEducationNeeds(SpecialEducationNeedCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'CHECK ((ProgramExitTypeCode IS NULL AND ProgramExitTypeCode IS NULL) OR (ProgramExitTypeCode IS NOT NULL AND ProgramExitTypeCode IS NOT NULL))'
    $AzSIS_SQL_Tables['SpecialEducationPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'SpecialEducationProgramCode VARCHAR(10) NOT NULL',
            'SchoolResponsibilityCode VARCHAR(5) NOT NULL DEFAULT "IEP"',
            'MainSpedSchool BOOLEAN NOT NULL',
            'SpecialEducationProgramEntryDate DATE NOT NULL',
            'SpecialEducationProgramExitDate DATE NULL DEFAULT NULL',
            'ProgramExitTypeCode VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,SpecialEducationProgramCode,SpecialEducationProgramEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SpecialEducationProgramCode) REFERENCES PossibleSpecialEducationPrograms(SpecialEducationProgramCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolResponsibilityCode) REFERENCES PossibleSchoolResponsibilities(SchoolResponsibilityCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ProgramExitTypeCode) REFERENCES PossibleSpecialEducationProgramExitTypes(ProgramExitTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['CoordinatedEarlyInterveningServices'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'CoordinatedEarlyInterveningServiceCode VARCHAR(25) NOT NULL',
            'CoordinatedEarlyInterveningServiceEntryDate DATE NOT NULL',
            'CoordinatedEarlyInterveningServiceExitDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,CoordinatedEarlyInterveningServiceCode,CoordinatedEarlyInterveningServiceEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CoordinatedEarlyInterveningServiceCode) REFERENCES PossibleCoordinatedEarlyInterveningServices(CoordinatedEarlyInterveningServiceCode) ON UPDATE CASCADE ON DELETE RESTRICT',
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'CHECK ((EnglishLanguageLearnerProgamEntryExitDate IS NULL AND ProgramExitTypeCode IS NULL) OR (EnglishLanguageLearnerProgamEntryExitDate IS NOT NULL AND ProgramExitTypeCode IS NOT NULL))'
    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['EnglishLanguageLearnerPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'EnglishLanguageLearnerProgamCode CHAR(2) NOT NULL',
            'EnglishLanguageLearnerProgamEntryDate DATE NOT NULL',
            'EnglishLanguageLearnerProgamEntryExitDate DATE NULL DEFAULT NULL',
            'ProgramExitTypeCode VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,EnglishLanguageLearnerProgamEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (EnglishLanguageLearnerProgamCode) REFERENCES PossibleEnglishLanguageLearnerPrograms(EnglishLanguageLearnerProgamCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ProgramExitTypeCode) REFERENCES PossibleEnglishLanguageLearnerProgramExitTypes(ProgramExitTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'CHECK ((21stCenturyCommunityLearningCenterProgramsExitDate IS NULL AND ProgramExitTypeCode IS NULL) OR (21stCenturyCommunityLearningCenterProgramsExitDate IS NOT NULL AND ProgramExitTypeCode IS NOT NULL))'
    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['21stCenturyCommunityLearningCenterPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            '21stCenturyCommunityLearningCenterActivityCode CHAR(11) NOT NULL',
            '21stCenturyCommunityLearningCenterProgramsEntryDate DATE NOT NULL',
            '21stCenturyCommunityLearningCenterProgramsExitDate DATE NULL DEFAULT NULL',
            'ProgramExitTypeCode VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,21stCenturyCommunityLearningCenterProgramsEntryDate,21stCenturyCommunityLearningCenterActivityCode)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (21stCenturyCommunityLearningCenterActivityCode) REFERENCES Possible21stCenturyCommunityLearningCenterActivities(21stCenturyCommunityLearningCenterActivityCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ProgramExitTypeCode) REFERENCES Possible21stCenturyCommunityLearningCenterExitTypes(ProgramExitTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'CHECK ((DropoutRecoveryProgramExitDate IS NULL AND ProgramExitTypeCode IS NULL) OR (DropoutRecoveryProgramExitDate IS NOT NULL AND ProgramExitTypeCode IS NOT NULL))'
    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['DropoutRecoveryPrograms'] = [
        'columns' => [
            'DropoutRecoveryProgramId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'DropoutRecoveryProgramWrittenLearningPlanDate DATE NOT NULL',
            'DropoutRecoveryProgramEntryDate DATE NOT NULL',
            'DropoutRecoveryProgramExitDate DATE NULL DEFAULT NULL',
            'ProgramExitTypeCode VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (DropoutRecoveryProgramId)',
            'UNIQUE (StudentId,DropoutRecoveryProgramEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ProgramExitTypeCode) REFERENCES PossibleDropoutRecoveryProgramExitTypes(ProgramExitTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['DropoutRecoveryProgress'] = [
        'columns' => [
            'DropoutRecoveryProgramId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'DropoutRecoveryProgramMonthCode TINYINT UNSIGNED NOT NULL',
            'DropoutRecoveryProgramSatisfactoryProgress BOOLEAN NOT NULL',
            'DropoutRecoveryProgramRevisedWrittenLearningPlanDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (DropoutRecoveryProgramId,DropoutRecoveryProgramMonthCode)',
            'FOREIGN KEY (DropoutRecoveryProgramMonthCode) REFERENCES DropoutRecoveryProgramMonths(DropoutRecoveryProgramMonthCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'CHECK ((GrandCanyonDiplomaProgramExitDate IS NULL AND ProgramExitTypeCode IS NULL) OR (GrandCanyonDiplomaProgramExitDate IS NOT NULL AND ProgramExitTypeCode IS NOT NULL))'
    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['GrandCanyonDiplomaPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'GrandCanyonDiplomaProgramEntryDate DATE NOT NULL',
            'GrandCanyonDiplomaProgramExitDate DATE NULL DEFAULT NULL',
            'ProgramExitTypeCode VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,GrandCanyonDiplomaProgramEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ProgramExitTypeCode) REFERENCES PossibleGrandCanyonDiplomaProgramExitTypes(ProgramExitTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['NationalSchoolLunchPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'NationalSchoolLunchProgram VARCHAR(75) NOT NULL',
            'NationalSchoolLunchProgramAEligibilitySource VARCHAR(75) NOT NULL',
            'NationalSchoolLunchProgramAEligibilityStatus VARCHAR(75) NOT NULL',
            'NationalSchoolLunchProgramEntryDate DATE NOT NULL',
            'NationalSchoolLunchProgramExitDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,NationalSchoolLunchProgramEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (NationalSchoolLunchProgram) REFERENCES PossibleNationalSchoolLunchPrograms(NationalSchoolLunchProgram) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (NationalSchoolLunchProgramAEligibilitySource) REFERENCES PossibleNationalSchoolLunchProgramEligibilitySources(NationalSchoolLunchProgramAEligibilitySource) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (NationalSchoolLunchProgramAEligibilityStatus) REFERENCES PossibleNationalSchoolLunchProgramEligibilityStatuses(NationalSchoolLunchProgramAEligibilityStatus) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['GiftedAndTalentedPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'GiftedAndTalentedProgramCode TINYINT UNSIGNED NOT NULL',
            'GiftedAndTalentedProgramEntryDate DATE NOT NULL',
            'GiftedAndTalentedProgramExitDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,GiftedAndTalentedProgramCode,GiftedAndTalentedProgramEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GiftedAndTalentedProgramCode) REFERENCES PossibleGiftedAndTalentedPrograms(GiftedAndTalentedProgramCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'ensure same StudentId is not concurrently enrolled
    $AzSIS_SQL_Tables['HomelessPrograms'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'HomelessProgram VARCHAR(75) NOT NULL',
            'HomelessProgramEntryDate DATE NOT NULL',
            'HomelessProgramExitDate DATE NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,HomelessProgram,HomelessProgramEntryDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (HomelessProgram) REFERENCES PossibleHomelessPrograms(HomelessProgram) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Adults'] = [
        'columns' => [
            'AdultId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'FirstName VARCHAR(75) NOT NULL',
            'MiddleName VARCHAR(75) NULL DEFAULT NULL',
            'LastName VARCHAR(75) NOT NULL',
            'MaidenName VARCHAR(75) NULL DEFAULT NULL',
            'GenerationCodeSuffix VARCHAR(10) NULL DEFAULT NULL',
            'PersonalTitlePrefix VARCHAR(10) NULL DEFAULT NULL',
            'Sex VARCHAR(50) NOT NULL',
            'BirthDate DATE NULL DEFAULT NULL',
            'AdultGoogleId CHAR(21) NULL DEFAULT NULL',
            'Email VARCHAR(255) NULL DEFAULT NULL',
            'Address VARCHAR(1024) NULL DEFAULT NULL',
            'AddressType VARCHAR(15) NULL DEFAULT "Home"',
            'Workplace VARCHAR(100) NULL DEFAULT NULL',
            'Updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'ExternalRead DATETIME NULL DEFAULT NULL',
            'PRIMARY KEY (AdultId)',
            'UNIQUE (AdultGoogleId)',
            'UNIQUE (Email)',
            'FOREIGN KEY (GenerationCodeSuffix) REFERENCES PossibleGenerationCodeSuffixes(GenerationCodeSuffix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (PersonalTitlePrefix) REFERENCES PossiblePersonalTitlePrefixes(PersonalTitlePrefix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (Sex) REFERENCES PossibleSexes(Sex) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AddressType) REFERENCES PossibleAddressTypes(AddressType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (FirstName<>"")',
            'CHECK (MiddleName IS NULL OR MiddleName<>"")',
            'CHECK (LastName<>"")',
            'CHECK (MaidenName IS NULL OR MaidenName<>"")',
            'CHECK (AdultGoogleId IS NULL OR AdultGoogleId<>"")',
            'CHECK (Email IS NULL OR Email<>"")',
            'CHECK (Address IS NULL OR Address<>"")',
            'CHECK (Workplace IS NULL OR Workplace<>"")'
        ],
        'values' => null,
    ];

    // TODO: add doctor
    //     'CHECK (PersonalTitlePrefix IS NOT NULL OR FirstName IS NOT NULL OR MiddleName IS NOT NULL OR LastName IS NOT NULL OR GenerationCodeSuffix IS NOT NULL)'
    $AzSIS_SQL_Tables['AdultOtherNames'] = [
        'columns' => [
            'AdultId INT UNSIGNED NOT NULL',
            'OtherNameType VARCHAR(30) NOT NULL',
            'PersonalTitlePrefix VARCHAR(10) NULL DEFAULT NULL',
            'FirstName VARCHAR(75) NULL DEFAULT NULL',
            'MiddleName VARCHAR(75) NULL DEFAULT NULL',
            'LastName VARCHAR(75) NULL DEFAULT NULL',
            'GenerationCodeSuffix VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (AdultId,OtherNameType)',
            'FOREIGN KEY (AdultId) REFERENCES Adults(AdultId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (OtherNameType) REFERENCES PossibleOtherNameTypes(OtherNameType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (PersonalTitlePrefix) REFERENCES PossiblePersonalTitlePrefixes(PersonalTitlePrefix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GenerationCodeSuffix) REFERENCES PossibleGenerationCodeSuffixes(GenerationCodeSuffix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (FirstName IS NULL OR FirstName<>"")',
            'CHECK (MiddleName IS NULL OR MiddleName<>"")',
            'CHECK (LastName IS NULL OR LastName<>"")'
        ],
        'values' => null,
    ];

    // TODO: doctor make sure no invalid entries
    $AzSIS_SQL_Tables['AdultPhoneNumbers'] = [
        'columns' => [
            'AdultId INT UNSIGNED NOT NULL',
            'PhoneNumberType VARCHAR(25) NOT NULL',
            'PhoneNumber VARCHAR(50) NOT NULL',
            'CountryCode CHAR(2) NOT NULL DEFAULT "US"',
            'PhoneNumberNote VARCHAR(100) NULL DEFAULT NULL',
            'CallOrder TINYINT UNSIGNED NOT NULL',
            'PRIMARY KEY (AdultId,PhoneNumberType)',
            'FOREIGN KEY (AdultId) REFERENCES Adults(AdultId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (PhoneNumberType) REFERENCES PossiblePhoneNumberTypes(PhoneNumberType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CountryCode) REFERENCES PossibleCountries(CountryCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (PhoneNumber<>"")',
            'CHECK (CallOrder > 0)'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ResidencyDocuments'] = [
        'columns' => [
            'AdultId INT UNSIGNED NOT NULL',
            'ResidencyDocumentType VARCHAR(255) NOT NULL',
            'FileName VARCHAR(255) NULL DEFAULT NULL',
            'FileType VARCHAR(100) NOT NULL',
            'FileData LONGBLOB NOT NULL',
            'OwnerOfSharedResidency VARCHAR(150) NULL DEFAULT NULL',
            'PRIMARY KEY (AdultId,ResidencyDocumentType)',
            'FOREIGN KEY (AdultId) REFERENCES Adults(AdultId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ResidencyDocumentType) REFERENCES PossibleResidencyDocumentTypes(ResidencyDocumentType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (OwnerOfSharedResidency IS NULL OR OwnerOfSharedResidency<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StudentMedicalProviders'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'MedicalProviderContactInformation TEXT NOT NULL',
            'HealthInsuranceCompany VARCHAR(150) NULL DEFAULT NULL',
            'HealthInsurancePolicyHolder INT UNSIGNED NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (HealthInsurancePolicyHolder) REFERENCES Adults(AdultId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (MedicalProviderContactInformation IS NULL OR MedicalProviderContactInformation<>"")',
            'CHECK (HealthInsuranceCompany IS NULL OR HealthInsuranceCompany<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Relationships'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AdultId INT UNSIGNED NOT NULL',
            'RelationshipCode VARCHAR(50) NOT NULL',
            'LegalCustody BOOLEAN NOT NULL',
            'LivesWith BOOLEAN NOT NULL',
            'OkToPickUp BOOLEAN NOT NULL',
            'AccessGrades BOOLEAN NOT NULL',
            'ReceivesMailings BOOLEAN NOT NULL',
            'ContactPriority TINYINT UNSIGNED',
            'RelationshipComment VARCHAR(255) NULL DEFAULT NULL',
            'Updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'ExternalRead DATETIME NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,AdultId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AdultId) REFERENCES Adults(AdultId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (RelationshipCode) REFERENCES PossibleRelationships(RelationshipCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Staff'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'FirstName VARCHAR(75) NOT NULL',
            'MiddleName VARCHAR(75) NULL DEFAULT NULL',
            'LastName VARCHAR(75) NOT NULL',
            'MaidenName VARCHAR(75) NULL DEFAULT NULL',
            'GenerationCodeSuffix VARCHAR(10) NULL DEFAULT NULL',
            'PersonalTitlePrefix VARCHAR(10) NULL',
            'Sex VARCHAR(50) NOT NULL',
            'BirthDate DATE NULL',
            'StaffGoogleId CHAR(21) NULL',
            'PRIMARY KEY (StaffId)',
            'UNIQUE (StaffGoogleId)',
            'FOREIGN KEY (PersonalTitlePrefix) REFERENCES PossiblePersonalTitlePrefixes(PersonalTitlePrefix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GenerationCodeSuffix) REFERENCES PossibleGenerationCodeSuffixes(GenerationCodeSuffix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (Sex) REFERENCES PossibleSexes(Sex) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (FirstName<>"")',
            'CHECK (MiddleName IS NULL OR MiddleName<>"")',
            'CHECK (LastName<>"")',
            'CHECK (MaidenName IS NULL OR MaidenName<>"")',
            'CHECK (StaffGoogleId IS NULL OR StaffGoogleId<>"")',
        ],
        'values' => null,
    ];

    // TODO: add doctor
    // 'CHECK (PersonalTitlePrefix IS NOT NULL OR FirstName IS NOT NULL OR MiddleName IS NOT NULL OR LastName IS NOT NULL OR GenerationCodeSuffix IS NOT NULL)'
    $AzSIS_SQL_Tables['StaffOtherNames'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'OtherNameType VARCHAR(30) NOT NULL',
            'PersonalTitlePrefix VARCHAR(10) NULL DEFAULT NULL',
            'FirstName VARCHAR(75) NULL DEFAULT NULL',
            'MiddleName VARCHAR(75) NULL DEFAULT NULL',
            'LastName VARCHAR(75) NULL DEFAULT NULL',
            'GenerationCodeSuffix VARCHAR(10) NULL DEFAULT NULL',
            'PRIMARY KEY (StaffId,OtherNameType)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (OtherNameType) REFERENCES PossibleOtherNameTypes(OtherNameType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (PersonalTitlePrefix) REFERENCES PossiblePersonalTitlePrefixes(PersonalTitlePrefix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GenerationCodeSuffix) REFERENCES PossibleGenerationCodeSuffixes(GenerationCodeSuffix) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (FirstName IS NULL OR FirstName<>"")',
            'CHECK (MiddleName IS NULL OR MiddleName<>"")',
            'CHECK (LastName IS NULL OR LastName<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffRaces'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'RaceCode VARCHAR(50) NOT NULL',
            'PRIMARY KEY (StaffId,RaceCode)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (RaceCode) REFERENCES PossibleRaces(RaceCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffEthnicGroups'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'EthnicGroup VARCHAR(75) NOT NULL',
            'PRIMARY KEY (StaffId,EthnicGroup)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (EthnicGroup) REFERENCES PossibleEthnicGroups(EthnicGroup) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffTribalAffiliations'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'TribalAffiliationCode VARCHAR(50) NOT NULL',
            'PRIMARY KEY (StaffId,TribalAffiliationCode)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TribalAffiliationCode) REFERENCES PossibleTribalAffiliations(TribalAffiliationCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffPictures'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'FileType VARCHAR(100) NOT NULL',
            'Picture LONGBLOB NOT NULL',
            'PRIMARY KEY (StaffId)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffIdentifications'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'StaffIdentificationSystem VARCHAR(30) NOT NULL',
            'AssigningOrganization VARCHAR(150) NULL DEFAULT NULL',
            'StaffIdentificationCode VARCHAR(150) NOT NULL',
            'PRIMARY KEY (StaffId,StaffIdentificationSystem)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffIdentificationSystem) REFERENCES PossibleStaffIdentificationSystems(StaffIdentificationSystem) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (AssigningOrganization IS NULL OR AssigningOrganization<>"")',
            'CHECK (StaffIdentificationCode IS NULL OR StaffIdentificationCode<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffSchoolAssociations'] = [
        'columns' => [
            'StaffSchoolAssociationId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StaffId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'PositionTitle VARCHAR(50) NULL DEFAULT NULL',
            'StaffClassification VARCHAR(50) NOT NULL',
            'StaffSchoolAssociationActive BOOLEAN NOT NULL',
            'StaffAssignmentBeginDate DATE NULL',
            'StaffAssignmentEndDate DATE NULL DEFAULT NULL',
            'OrderOfAssignment TINYINT UNSIGNED NULL DEFAULT NULL',
            'PRIMARY KEY (StaffSchoolAssociationId)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffClassification) REFERENCES PossibleStaffClassifications(StaffClassification) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (PositionTitle IS NULL OR PositionTitle<>"")'
        ],
        'values' => null,
    ];

    // TODO: doctor FileType is NULL iff FileData is NULL iff FileName is NULL
    // TODO: doctor make sure AlertLableX is NULL => AlertNotesX is NULL
    $AzSIS_SQL_Tables['Alerts'] = [
        'columns' => [
            'AlertId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StudentId INT UNSIGNED NOT NULL',
            'StaffId INT UNSIGNED NOT NULL',
            'AlertType VARCHAR(50) NOT NULL',
            'AlertNotes1 TEXT NULL DEFAULT NULL',
            'AlertNotes2 TEXT NULL DEFAULT NULL',
            'AlertNotes3 TEXT NULL DEFAULT NULL',
            'AlertNotes4 TEXT NULL DEFAULT NULL',
            'AlertBeginDate DATE NOT NULL',
            'AlertEndDate DATE NULL DEFAULT NULL',
            'FileName VARCHAR(255) NULL DEFAULT NULL',
            'FileType VARCHAR(100) NULL DEFAULT NULL',
            'FileData LONGBLOB NULL DEFAULT NULL',
            'PRIMARY KEY (AlertId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AlertType) REFERENCES PossibleAlertTypes(AlertType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (AlertNotes1 IS NULL OR AlertNotes1<>"")',
            'CHECK (AlertNotes2 IS NULL OR AlertNotes2<>"")',
            'CHECK (AlertNotes3 IS NULL OR AlertNotes3<>"")',
            'CHECK (AlertNotes4 IS NULL OR AlertNotes4<>"")',
            'CHECK ( (FileName IS NULL AND FileData IS NULL) OR (FileName IS NOT NULL AND FileData IS NOT NULL) )'
        ],
        'values' => null,
    ];

    // TODO: doctor FileType is NULL iff FileData is NULL iff FileName is NULL
    $AzSIS_SQL_Tables['LogEntries'] = [
        'columns' => [
            'LogEntryId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StudentId INT UNSIGNED NOT NULL',
            'StaffId INT UNSIGNED NOT NULL',
            'Log VARCHAR(25) NOT NULL',
            'LogIssue TEXT NOT NULL',
            'LogActionTaken TEXT NOT NULL',
            'LogNotifiedGuardian BOOLEAN NOT NULL',
            'LogDate DATETIME NOT NULL',
            'FileName VARCHAR(255) NULL DEFAULT NULL',
            'FileType VARCHAR(100) NULL DEFAULT NULL',
            'FileData LONGBLOB NULL DEFAULT NULL',
            'LogCreationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'LogModificationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'PRIMARY KEY (LogEntryId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (Log) REFERENCES PossibleLogs(Log) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (LogIssue IS NULL OR LogIssue<>"")',
            'CHECK (LogActionTaken IS NULL OR LogActionTaken<>"")',
            'CHECK ( (FileName IS NULL AND FileData IS NULL) OR (FileName IS NOT NULL AND FileData IS NOT NULL) )'
        ],
        'values' => null,
    ];

    // TODO: doctor FileType is NULL iff FileData is NULL iff FileName is NULL
    $AzSIS_SQL_Tables['SeriousDisciplinaryIncidents'] = [
        'columns' => [
            'SeriousDisciplinaryIncidentId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'StaffId INT UNSIGNED NULL DEFAULT NULL',
            'BehaviorCode VARCHAR(25) NOT NULL',
            'ActionCode VARCHAR(100) NULL DEFAULT NULL',
            'BeginDate DATE NOT NULL',
            'EndDate DATE NULL DEFAULT NULL',
            'Details TEXT NOT NULL',
            'FileName VARCHAR(255) NULL DEFAULT NULL',
            'FileType VARCHAR(100) NULL DEFAULT NULL',
            'FileData LONGBLOB NULL DEFAULT NULL',
            'SeriousDisciplinaryIncidentICreationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'SeriousDisciplinaryIncidentIModificationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'PRIMARY KEY (SeriousDisciplinaryIncidentId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (BehaviorCode) REFERENCES PossibleBehaviors(BehaviorCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ActionCode) REFERENCES PossibleActions(ActionCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FileType) REFERENCES PossibleFileTypes(FileType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (Details IS NULL OR Details<>"")',
            'CHECK ( (FileName IS NULL AND FileData IS NULL) OR (FileName IS NOT NULL AND FileData IS NOT NULL) )'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffTimeOff'] = [
        'columns' => [
            'StaffId INT UNSIGNED NOT NULL',
            'TimeOffDate DATE NOT NULL',
            'AllDayTimeOff BOOLEAN NOT NULL',
            'TimeOffNotes TEXT NULL DEFAULT NULL',
            'PRIMARY KEY (StaffId,TimeOffDate)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (TimeOffNotes IS NULL OR TimeOffNotes<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Courses'] = [
        'columns' => [
            'CourseId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'CourseTitle VARCHAR(60) NOT NULL',
            'DepartmentCode VARCHAR(4) NOT NULL',
            'CourseNumber FLOAT UNSIGNED NOT NULL',
            'CourseDescription TEXT NULL DEFAULT NULL',
            'EducationalEnvironmentCode CHAR(2) NOT NULL',
            'CourseLevel VARCHAR(50) NOT NULL',
            'PRIMARY KEY (CourseId)',
            'UNIQUE (CourseTitle)',
            'UNIQUE (DepartmentCode,CourseNumber)',
            'FOREIGN KEY (DepartmentCode) REFERENCES PossibleDepartments(DepartmentCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (EducationalEnvironmentCode) REFERENCES PossibleEducationalEnvironments(EducationalEnvironmentCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CourseLevel) REFERENCES PossibleCourseLevels(CourseLevel) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (CourseTitle<>"")',
            'CHECK (CourseDescription IS NULL OR CourseDescription<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SchoolCalendars'] = [
        'columns' => [
            'SchoolCalendarId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'SchoolId INT NOT NULL',
            'AcademicYear YEAR NOT NULL',
            'CalendarTypeCode VARCHAR(20) NOT NULL',
            'GraduationDate DATE NULL',
            'PRIMARY KEY (SchoolCalendarId)',
            'UNIQUE (SchoolId,AcademicYear)',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CalendarTypeCode) REFERENCES PossibleCalendarTypes(CalendarTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Classrooms'] = [
        'columns' => [
            'ClassroomId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'SchoolCalendarId INT UNSIGNED NOT NULL',
            'ClassroomDescription VARCHAR(100) NOT NULL',
            'IsElementary BOOLEAN NOT NULL',
            'GoogleCourseId CHAR(12) NULL DEFAULT NULL',
            'RemindToken CHAR(32) NULL DEFAULT NULL',
            'Updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'ExternalRead DATETIME NULL DEFAULT NULL',
            'PRIMARY KEY (ClassroomId)',
            'UNIQUE (GoogleCourseId)',
            'UNIQUE (RemindToken)',
            'FOREIGN KEY (SchoolCalendarId) REFERENCES SchoolCalendars(SchoolCalendarId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (ClassroomDescription<>"")',
            'CHECK (GoogleCourseId IS NULL OR GoogleCourseId<>"")',
            'CHECK (RemindToken IS NULL OR RemindToken<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Classes'] = [
        'columns' => [
            'ClassId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'ClassroomId INT UNSIGNED NOT NULL',
            'CourseId INT UNSIGNED NOT NULL',
            'Period DECIMAL(4,2) NOT NULL',
            'Credits DECIMAL(6,5) UNSIGNED NOT NULL DEFAULT 1',
            'ClassDescription VARCHAR(200) NULL DEFAULT NULL',
            'PRIMARY KEY (ClassId)',
            'UNIQUE (ClassroomId,CourseId)',
            'FOREIGN KEY (ClassroomId) REFERENCES Classrooms(ClassroomId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CourseId) REFERENCES Courses(CourseId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (ClassDescription IS NULL OR ClassDescription<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ClassTerms'] = [
        'columns' => [
            'ClassId INT UNSIGNED NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'PRIMARY KEY (ClassId,TermName)',
            'FOREIGN KEY (ClassId) REFERENCES Classes(ClassId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SchoolCalendarDates'] = [
        'columns' => [
            'SchoolCalendarId INT UNSIGNED NOT NULL',
            'CalendarEventDate DATE NOT NULL',
            'CalendarEvent VARCHAR(75) NOT NULL',
            'GradingTermName VARCHAR(25) NOT NULL',
            'PRIMARY KEY (SchoolCalendarId,CalendarEventDate)',
            'FOREIGN KEY (SchoolCalendarId) REFERENCES SchoolCalendars(SchoolCalendarId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CalendarEvent) REFERENCES PossibleCalendarEvents(CalendarEvent) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GradingTermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StaffClassroomAssociations'] = [
        'columns' => [
            'StaffClassroomAssociationId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StaffId INT UNSIGNED NOT NULL',
            'ClassroomId INT UNSIGNED NOT NULL',
            'ClassroomPositionCode CHAR(1) NOT NULL',
            'SectionAssociationBeginDate DATE NULL DEFAULT NULL',
            'SectionAssociationEndDate DATE NULL DEFAULT NULL',
            'Updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'ExternalRead DATETIME NULL DEFAULT NULL',
            'PRIMARY KEY (StaffClassroomAssociationId)',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassroomId) REFERENCES Classrooms(ClassroomId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassroomPositionCode) REFERENCES PossibleClassroomPositions(ClassroomPositionCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    // TODO: doctor ensure no overlap of enrollment
    $AzSIS_SQL_Tables['StudentSchoolAssociations'] = [
        'columns' => [
            'StudentSchoolAssociationId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolMembershipCode CHAR(1) NOT NULL DEFAULT "M"',
            'SchoolEntryDate DATE NOT NULL',
            'SchoolEntryTypeCode VARCHAR(5) NOT NULL',
            'GradeLevelCode VARCHAR(2) NOT NULL',
            'SchoolWithdrawDate DATE NOT NULL',
            'SchoolWithdrawTypeCode VARCHAR(5) NOT NULL',
            'SchoolCalendarId INT UNSIGNED NOT NULL',
            'FulltimeEquivalentCode DECIMAL(3,2) NOT NULL DEFAULT 1.00',
            'PRIMARY KEY (StudentSchoolAssociationId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolMembershipCode) REFERENCES PossibleSchoolMemberships(SchoolMembershipCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolEntryTypeCode) REFERENCES PossibleSchoolEntryTypes(SchoolEntryTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GradeLevelCode) REFERENCES PossibleGradeLevels(GradeLevelCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolWithdrawTypeCode) REFERENCES PossibleSchoolWithdrawTypes(SchoolWithdrawTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolCalendarId) REFERENCES SchoolCalendars(SchoolCalendarId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (FulltimeEquivalentCode) REFERENCES PossibleSchoolFulltimeEquivalents(FulltimeEquivalentCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['TuitionPayers'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolId INT NOT NULL',
            'AcademicYear YEAR NOT NULL',
            'TuitionPayerCode TINYINT UNSIGNED NOT NULL',
            'TuitionPercent DECIMAL(7,4) NOT NULL',
            'PRIMARY KEY (StudentId,SchoolId,AcademicYear,TuitionPayerCode)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TuitionPayerCode) REFERENCES PossibleTuitionPayers(TuitionPayerCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StudentClassroomAssociations'] = [
        'columns' => [
            'StudentClassroomAssociationId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StudentId INT UNSIGNED NOT NULL',
            'ClassroomId INT UNSIGNED NOT NULL',
            'ClassroomEntryDate DATE NOT NULL',
            'ClassroomTransferredEntryDate DATE NULL DEFAULT NULL',
            'ClassroomEntryTypeCode CHAR(1) NOT NULL',
            'ClassroomExitDate DATE NOT NULL',
            'ClassroomExitTypeCode CHAR(2) NOT NULL',
            'GradingType CHAR(5) NOT NULL',
            'AssureHighSchoolCredit BOOLEAN NOT NULL DEFAULT FALSE',
            'ClassroomNameOverride VARCHAR(100) NULL DEFAULT NULL',
            'DepartmentCodeOverride VARCHAR(4) NULL DEFAULT NULL',
            'CourseLevelOverride VARCHAR(50) NULL DEFAULT NULL',
            'CreditsOverride DECIMAL(6,5) UNSIGNED NULL DEFAULT NULL',
            'Updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'ExternalRead DATETIME NULL DEFAULT NULL',
            'PRIMARY KEY (StudentClassroomAssociationId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassroomId) REFERENCES Classrooms(ClassroomId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassroomEntryTypeCode) REFERENCES PossibleClassroomEntryTypes(ClassroomEntryTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassroomExitTypeCode) REFERENCES PossibleClassroomExitTypes(ClassroomExitTypeCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GradingType) REFERENCES PossibleGradingTypes(GradingType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (DepartmentCodeOverride) REFERENCES PossibleDepartments(DepartmentCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (CourseLevelOverride) REFERENCES PossibleCourseLevels(CourseLevel) ON UPDATE CASCADE ON DELETE RESTRICT',
            'UNIQUE (StudentId,ClassroomId,ClassroomEntryTypeCode)',
            'CHECK (ClassroomNameOverride IS NULL OR ClassroomNameOverride<>"")'
        ],
        'values' => null,
    ];

    // TODO: dcotor esnure all attendance is within school association
    $AzSIS_SQL_Tables['Attendance'] = [
        'columns' => [
            'StudentClassroomAssociationId INT UNSIGNED NOT NULL',
            'AttendanceDate DATE NOT NULL',
            'AttendanceType VARCHAR(15) NOT NULL',
            'PRIMARY KEY (StudentClassroomAssociationId,AttendanceDate)',
            'FOREIGN KEY (StudentClassroomAssociationId) REFERENCES StudentClassroomAssociations(StudentClassroomAssociationId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AttendanceType) REFERENCES PossibleAttendanceTypes(AttendanceType) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AttendanceInformation'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AttendanceDate DATE NOT NULL',
            'AbsenceIsExcused BOOLEAN NOT NULL',
            'AbsenceDescription TEXT NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,AttendanceDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (AbsenceDescription IS NULL OR AbsenceDescription<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AssessmentAnswers'] = [
        'columns' => [
            'AssessmentQuestion VARCHAR(100) NOT NULL',
            'StudentId INT UNSIGNED NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'AcademicYear YEAR NOT NULL',
            'StaffId INT UNSIGNED NOT NULL',
            'AssessmentAnswerCode CHAR(1) NOT NULL',
            'PRIMARY KEY (AssessmentQuestion, StudentId, TermName, AcademicYear)',
            'FOREIGN KEY (AssessmentQuestion) REFERENCES PossibleAssessmentQuestions(AssessmentQuestion) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AssessmentAnswerCode) REFERENCES PossibleAssessmentAnswers(AssessmentAnswerCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['TermComments'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AcademicYear YEAR NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'TermComment TEXT NOT NULL',
            'StaffId INT UNSIGNED NOT NULL',
            'PRIMARY KEY (StudentId,AcademicYear,TermName)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (TermComment IS NULL OR TermComment<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ExternalTranscripts'] = [
        'columns' => [
            'SchoolId INT NULL',
            'AcademicYear YEAR NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'StudentId INT UNSIGNED NOT NULL',
            'GradeLevelCode VARCHAR(2) NOT NULL',
            'ClassName VARCHAR(100) NOT NULL',
            'ClassGrade VARCHAR(10) NOT NULL',
            'Credits DECIMAL(6,5) UNSIGNED NOT NULL',
            'DepartmentCode VARCHAR(4) NOT NULL',
            'PRIMARY KEY (AcademicYear,TermName,StudentId,ClassName)',
            'FOREIGN KEY (SchoolId) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (GradeLevelCode) REFERENCES PossibleGradeLevels(GradeLevelCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (DepartmentCode) REFERENCES PossibleDepartments(DepartmentCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (ClassName<>"")',
            'CHECK (ClassGrade<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AttendanceHistory'] = [
        'columns' => [
            'StudentClassroomAssociationId INT UNSIGNED NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'Absences TINYINT UNSIGNED NOT NULL DEFAULT 0',
            'Tardies TINYINT UNSIGNED NOT NULL DEFAULT 0',
            'PRIMARY KEY (StudentClassroomAssociationId,TermName)',
            'FOREIGN KEY (StudentClassroomAssociationId) REFERENCES StudentClassroomAssociations(StudentClassroomAssociationId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ClassCalendarDates'] = [
        'columns' => [
            'ClassId INT UNSIGNED NOT NULL',
            'CalendarEventDate DATE NOT NULL',
            'CalendarEventName VARCHAR(100) NOT NULL',
            'PRIMARY KEY (ClassId,CalendarEventDate)',
            'FOREIGN KEY (ClassId) REFERENCES Classes(ClassId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (CalendarEventName<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AssignmentCategories'] = [
        'columns' => [
            'AssignmentCategoryId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'AssignmentCategoryName VARCHAR(100) NOT NULL',
            'CourseId INT UNSIGNED NOT NULL',
            'AcademicYear YEAR NOT NULL',
            'AssignmentCategorySortNumber DECIMAL(7,3) NULL DEFAULT NULL',
            'PRIMARY KEY (AssignmentCategoryId)',
            'FOREIGN KEY (CourseId) REFERENCES Courses(CourseId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'UNIQUE (AssignmentCategoryName,CourseId,AcademicYear)',
            'CHECK (AssignmentCategoryName<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Assignments'] = [
        'columns' => [
            'AssignmentId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'AssignmentName VARCHAR(200) NOT NULL',
            'AssignmentCategoryId INT UNSIGNED NOT NULL',
            'MaxScore DECIMAL(6,3) UNSIGNED NULL DEFAULT NULL',
            'AssignmentSortNumber DECIMAL(7,3) NULL DEFAULT NULL',
            'PRIMARY KEY (AssignmentId)',
            'FOREIGN KEY (AssignmentCategoryId) REFERENCES AssignmentCategories(AssignmentCategoryId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'UNIQUE (AssignmentName,AssignmentCategoryId)',
            'CHECK (AssignmentName<>"")'
        ],
        'values' => null,
    ];


    $AzSIS_SQL_Tables['AssignmentsInfo'] = [
        'columns' => [
            'AssignmentId INT UNSIGNED NOT NULL',
            'ClassId INT UNSIGNED NOT NULL',
            'Due DATE NOT NULL',
            'PRIMARY KEY (AssignmentId,ClassId)',
            'FOREIGN KEY (AssignmentId) REFERENCES Assignments(AssignmentId) ON UPDATE CASCADE ON DELETE CASCADE',
            'FOREIGN KEY (ClassId) REFERENCES Classes(ClassId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Scores'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AssignmentId INT UNSIGNED NOT NULL',
            'ScoreDate DATE NULL DEFAULT NULL',
            'Score DECIMAL(6,3) UNSIGNED NULL DEFAULT NULL',
            'AlternateEmptyScoreDate BOOLEAN NOT NULL DEFAULT FALSE',
            'FakeScoreDate DATE NULL DEFAULT NULL',
            'FakeScore DECIMAL(6,3) UNSIGNED NULL DEFAULT NULL',
            'ScoreNote VARCHAR(100) NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,AssignmentId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AssignmentId) REFERENCES Assignments(AssignmentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (ScoreNote IS NULL OR ScoreNote<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StreamGroups'] = [
        'columns' => [
            'StreamGroupId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'ClassId INT UNSIGNED NOT NULL',
            'StreamGroupName VARCHAR(100) NOT NULL',
            'ScoringType CHAR(3) NOT NULL',
            'Weight DECIMAL(9,6) UNSIGNED NOT NULL DEFAULT 1',
            'StreamGroupDescription VARCHAR(255) NULL DEFAULT NULL',
            'StreamGroupSortNumber DECIMAL(7,3) NULL DEFAULT NULL',
            'StreamGroupCeiling BOOLEAN NOT NULL DEFAULT TRUE',
            'PRIMARY KEY (StreamGroupId)',
            'FOREIGN KEY (ClassId) REFERENCES Classes(ClassId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ScoringType) REFERENCES PossibleScoringTypes(ScoringType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'UNIQUE (ClassId,StreamGroupName)',
            'CHECK (StreamGroupName<>"")',
            'CHECK (StreamGroupDescription IS NULL OR StreamGroupDescription<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['Streams'] = [
        'columns' => [
            'StreamId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'StreamName VARCHAR(255) NOT NULL',
            'StreamGroupId INT UNSIGNED NOT NULL',
            'Weight DECIMAL(9,6) UNSIGNED NOT NULL DEFAULT 1',
            'StreamDescription VARCHAR(255) NULL DEFAULT NULL',
            'StreamSortNumber DECIMAL(7,3) NULL DEFAULT NULL',
            'AreMultiyearExperts BOOLEAN NOT NULL DEFAULT FALSE',
            'PRIMARY KEY (StreamId)',
            'FOREIGN KEY (StreamGroupId) REFERENCES StreamGroups(StreamGroupId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'UNIQUE (StreamName,StreamGroupId)',
            'CHECK (StreamName<>"")',
            'CHECK (StreamDescription IS NULL OR StreamDescription<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['StreamFragments'] = [
        'columns' => [
            'StreamId INT UNSIGNED NOT NULL',
            'AssignmentCategoryId INT UNSIGNED NOT NULL',
            'Prefix VARCHAR(15) NULL DEFAULT NULL',
            'Postfix VARCHAR(15) NULL DEFAULT NULL',
            'MinAssignment FLOAT NULL DEFAULT NULL',
            'MaxAssignment FLOAT NULL DEFAULT NULL',
            'StreamFragmentDescription VARCHAR(100) NULL DEFAULT NULL',
            'StreamFragmentSortNumber DECIMAL(7,3) NULL DEFAULT NULL',
            'PRIMARY KEY (StreamId,AssignmentCategoryId)',
            'FOREIGN KEY (StreamId) REFERENCES Streams(StreamId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AssignmentCategoryId) REFERENCES AssignmentCategories(AssignmentCategoryId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK (Prefix IS NULL OR Prefix<>"")',
            'CHECK (Postfix IS NULL OR Postfix<>"")',
            'CHECK (StreamFragmentDescription IS NULL OR StreamFragmentDescription<>"")'
        ],
        'values' => null,
    ];

    // TODO: doctor check  null of *some* scores and < of scores
    $AzSIS_SQL_Tables['GoalsForStreamGroups'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'StreamGroupId INT UNSIGNED NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'MaxScore DECIMAL(9,6) UNSIGNED NULL DEFAULT NULL',
            'AScore DECIMAL(9,6) UNSIGNED NULL DEFAULT NULL',
            'BScore DECIMAL(9,6) UNSIGNED NULL DEFAULT NULL',
            'CScore DECIMAL(9,6) UNSIGNED NULL DEFAULT NULL',
            'DScore DECIMAL(9,6) UNSIGNED NULL DEFAULT NULL',
            'PRIMARY KEY (StudentId,StreamGroupId,TermName)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StreamGroupId) REFERENCES StreamGroups(StreamGroupId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['TermRankGradeLevels'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'StreamGroupId INT UNSIGNED NOT NULL',
            'TermName VARCHAR(25) NOT NULL',
            'RankGradeLevelCode CHAR(3) NOT NULL',
            'StaffId INT UNSIGNED NOT NULL',
            'PRIMARY KEY (StudentId, StreamGroupId, TermName)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StreamGroupId) REFERENCES StreamGroups(StreamGroupId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermName) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StaffId) REFERENCES Staff(StaffId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (RankGradeLevelCode) REFERENCES PossibleRankGradeLevels(RankGradeLevelCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['GradeRedirects'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'ClassIdIn INT UNSIGNED NOT NULL',
            'TermNameIn VARCHAR(25) NOT NULL',
            'ClassIdOut INT UNSIGNED NOT NULL',
            'TermNameOut VARCHAR(25) NOT NULL',
            'PRIMARY KEY (StudentId,ClassIdIn,TermNameIn)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassIdIn) REFERENCES Classes(ClassId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermNameIn) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ClassIdOut) REFERENCES Classes(ClassId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (TermNameOut) REFERENCES PossibleTerms(TermName) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    //----------------------------------------------------------------------------------------

    $AzSIS_SQL_Tables['AzMeritScores'] = [
        'columns' => [
            'AzMeritScoreId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'AcademicYear YEAR NOT NULL',
            'AzMeritSeason VARCHAR(10) NOT NULL',
            'SaisId INT UNSIGNED NOT NULL',
            'AzMeritAssessmentSubtestTitle VARCHAR(15) NOT NULL',
            'AzMeritScaledScore VARCHAR(15) NOT NULL',
            'AzMeritStandardErrorOfMeasurement VARCHAR(15) NOT NULL',
            'AzMeritPerformanceLevel VARCHAR(15) NOT NULL',
            'AzMeritMoveOnWhenReadingIndicator BOOLEAN NOT NULL',
            'AzMeritOpportunityNumber BOOLEAN NOT NULL',
            'PRIMARY KEY (AzMeritScoreId)',
            'UNIQUE (AcademicYear,AzMeritSeason,SaisId,AzMeritAssessmentSubtestTitle)',
            'FOREIGN KEY (SaisId) REFERENCES Students(SaisId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK(AzMeritSeason<>"")',
            'CHECK(AzMeritAssessmentSubtestTitle<>"")',
            'CHECK(AzMeritScaledScore<>"")',
            'CHECK(AzMeritStandardErrorOfMeasurement<>"")',
            'CHECK(AzMeritPerformanceLevel<>"")'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AzMeritBreakdownScores'] = [
        'columns' => [
            'AzMeritScoreId INT UNSIGNED NOT NULL',
            'AzMeritBreakdownFieldName VARCHAR(191) NOT NULL',
            'AzMeritBreakdownValue VARCHAR(15) NOT NULL',
            'PRIMARY KEY (AzMeritScoreId,AzMeritBreakdownFieldName)',
            'FOREIGN KEY (AzMeritScoreId) REFERENCES AzMeritScores(AzMeritScoreId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'CHECK(AzMeritBreakdownFieldName<>"")',
            'CHECK(AzMeritBreakdownValue<>"")'
        ],
        'values' => null,
    ];

    // TODO: AimsScienceRawScore should be NOT NULL
    // TODO: AimsScienceNumberOfPointsPossible should be NOT NULL
    $AzSIS_SQL_Tables['AimsScienceScores'] = [
        'columns' => [
            'AimsScienceScoreId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'AcademicYear YEAR NOT NULL',
            'AimsSeason VARCHAR(10) NOT NULL',
            'SaisId INT UNSIGNED NOT NULL',
            'AimsProficiencyLevelCode TINYINT UNSIGNED NOT NULL',
            'AimsScienceRawScore SMALLINT UNSIGNED NULL',
            'AimsScienceNumberOfPointsPossible SMALLINT UNSIGNED NULL',
            'AimsScienceScaleScore SMALLINT UNSIGNED NOT NULL',
            'PRIMARY KEY (AimsScienceScoreId)',
            'UNIQUE (AcademicYear,AimsSeason,SaisId)',
            'FOREIGN KEY (SaisId) REFERENCES Students(SaisId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AimsProficiencyLevelCode) REFERENCES PossibleAimsProficiencyLevels(AimsProficiencyLevelCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AimsScienceBreakdownScores'] = [
        'columns' => [
            'AimsScienceScoreId INT UNSIGNED NOT NULL',
            'AimsScienceBreakdownFieldName VARCHAR(50) NOT NULL',
            'AimsScienceBreakdownValue SMALLINT UNSIGNED NOT NULL',
            'AimsScienceBreakdownPercent DECIMAL(4,1) NOT NULL',
            'PRIMARY KEY (AimsScienceScoreId,AimsScienceBreakdownFieldName)',
            'FOREIGN KEY (AimsScienceScoreId) REFERENCES AimsScienceScores(AimsScienceScoreId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SatScores'] = [
        'columns' => [
            'SatScoreId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'SatTestType VARCHAR(60) NOT NULL',
            'SatTestDate DATE NOT NULL',
            'StudentId INT UNSIGNED NOT NULL',
            'SatScore SMALLINT UNSIGNED NOT NULL',
            'SatNationallyRepresentativeSamplePercentile TINYINT UNSIGNED',
            'SatUserPercentile TINYINT UNSIGNED',
            'SatCollegeAndCareerReady BOOLEAN',
            'PRIMARY KEY (SatScoreId)',
            'UNIQUE (SatTestType,SatTestDate,StudentId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SatBreakdownScores'] = [
        'columns' => [
            'SatScoreId INT UNSIGNED NOT NULL',
            'SatBreakdownFieldName VARCHAR(50) NOT NULL',
            'SatBreakdownValue SMALLINT UNSIGNED NOT NULL',
            'PRIMARY KEY (SatScoreId,SatBreakdownFieldName)',
            'FOREIGN KEY (SatScoreId) REFERENCES SatScores(SatScoreId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ApScores'] = [
        'columns' => [
            'ApAdminYear YEAR NOT NULL',
            'ApExamCode TINYINT UNSIGNED NOT NULL',
            'StudentId INT UNSIGNED NOT NULL',
            'ApScore TINYINT UNSIGNED NOT NULL',
            'PRIMARY KEY (ApAdminYear,ApExamCode,StudentId)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (ApExamCode) REFERENCES PossibleApTests(ApExamCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ApAwards'] = [
        'columns' => [
            'ApAwardYear YEAR NOT NULL',
            'ApAwardCode TINYINT UNSIGNED NOT NULL',
            'StudentId INT UNSIGNED NOT NULL',
            'PRIMARY KEY (ApAwardYear,ApAwardCode,StudentId)',
            'FOREIGN KEY (ApAwardCode) REFERENCES PossibleApAwards(ApAwardCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ActScores'] = [
        'columns' => [
            'SaisId INT UNSIGNED NOT NULL',
            'Test_Dte DATE NOT NULL',
            'Eng TINYINT UNSIGNED NULL DEFAULT NULL',
            'Mth TINYINT UNSIGNED NULL DEFAULT NULL',
            'Rdg TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sci TINYINT UNSIGNED NULL DEFAULT NULL',
            'Composite TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_Eng TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_Math TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_Read TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_Sci TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_Eng TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_Math TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_Read TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_Sci TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_Comp TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sum_Scale TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_Comp TINYINT UNSIGNED NULL DEFAULT NULL',
            'STEM TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_STEM TINYINT UNSIGNED NULL DEFAULT NULL',
            'Writing TINYINT UNSIGNED NULL DEFAULT NULL',
            'W_USRnk TINYINT UNSIGNED NULL DEFAULT NULL',
            'W_Dom_Ideas TINYINT UNSIGNED NULL DEFAULT NULL',
            'W_Dom_Supt TINYINT UNSIGNED NULL DEFAULT NULL',
            'W_Dom_Org TINYINT UNSIGNED NULL DEFAULT NULL',
            'W_Dom_LangUse TINYINT UNSIGNED NULL DEFAULT NULL',
            'ELA TINYINT UNSIGNED NULL DEFAULT NULL',
            'USRnk_ELA TINYINT UNSIGNED NULL DEFAULT NULL',
            'R_CmplxTxt TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Eng_Sc TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Mth_Sc TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Rdg_Sc TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Sci_Sc TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Composite TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_STEM TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Writ_Sc TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_STEM TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_ELA TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_Sum_Scale TINYINT UNSIGNED NULL DEFAULT NULL',
            'Sup_ELA TINYINT UNSIGNED NULL DEFAULT NULL',
            'StRnk_W TINYINT UNSIGNED NULL DEFAULT NULL',
            'HS_Code VARCHAR(10) NOT NULL',
            'PRIMARY KEY (SaisId,Test_Dte)',
            'FOREIGN KEY (SaisId) REFERENCES Students(SaisId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (HS_Code) REFERENCES PossibleSchools(ActSchoolOrgNumber) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['ActAspireScores'] = [
        'columns' => [
            'SaisId INT UNSIGNED NOT NULL',
            'TestName VARCHAR(35) NOT NULL',
            'TestAdminDate DATE NOT NULL',
            'CompositeNationalPercentileRank TINYINT UNSIGNED NULL DEFAULT NULL',
            'ACTAspireCompositeScore SMALLINT UNSIGNED NULL DEFAULT NULL',
            'ACTProjectedCompositeScoreLow SMALLINT UNSIGNED NULL DEFAULT NULL',
            'ACTProjectedCompositeScoreHigh SMALLINT UNSIGNED NULL DEFAULT NULL',
            'ELANationalPercentileRank TINYINT UNSIGNED NULL DEFAULT NULL',
            'ELAScore SMALLINT UNSIGNED NULL DEFAULT NULL',
            'ELAACTReadiness BOOLEAN NULL DEFAULT NULL',
            'STEMNationalPercentileRank TINYINT UNSIGNED NULL DEFAULT NULL',
            'STEMScore SMALLINT UNSIGNED NULL DEFAULT NULL',
            'STEMACTReadiness BOOLEAN NULL DEFAULT NULL',
            'ProgressTextComplexity BOOLEAN NULL DEFAULT NULL',
            'ProgressTowardCareerReadiness TINYINT NULL DEFAULT NULL',
            'NationalPercentileRank TINYINT UNSIGNED NULL DEFAULT NULL',
            'WritingScore BOOLEAN NULL DEFAULT NULL',
            'ScaleScore SMALLINT UNSIGNED NULL DEFAULT NULL',
            'ReadinessLevel CHAR(1) NULL DEFAULT NULL',
            'ReadinessBenchmark BOOLEAN NULL DEFAULT NULL',
            'PRIMARY KEY (SaisId,TestName,TestAdminDate)',
            'FOREIGN KEY (SaisId) REFERENCES Students(SaisId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['MapScores'] = [
        'columns' => [
            'TermName VARCHAR(100) NOT NULL',
            'DistrictName VARCHAR(100)',
            'District_StateId VARCHAR(100)',
            'SchoolName VARCHAR(100)',
            'School_StateId VARCHAR(100)',
            'StudentLastName VARCHAR(100)',
            'StudentFirstName VARCHAR(100)',
            'StudentMI VARCHAR(100)',
            'StudentId INT UNSIGNED NOT NULL',
            'Student_StateId VARCHAR(100)',
            'StudentDateOfBirth DATE',
            'StudentEthnicGroup VARCHAR(100)',
            'NWEAStandard_EthnicGroup VARCHAR(50)',
            'StudentGender VARCHAR(50)',
            'Grade TINYINT UNSIGNED',
            'NWEAStandard_Grade TINYINT UNSIGNED',
            'Subject VARCHAR(65)',
            'Course VARCHAR(100) NOT NULL',
            'NormsReferenceData YEAR',
            'WISelectedAYFall TINYINT UNSIGNED',
            'WISelectedAYWinter TINYINT UNSIGNED',
            'WISelectedAYSpring TINYINT UNSIGNED',
            'WIPreviousAYFall TINYINT UNSIGNED',
            'WIPreviousAYWinter TINYINT UNSIGNED',
            'WIPreviousAYSpring TINYINT UNSIGNED',
            'TestType VARCHAR(50)',
            'TestName VARCHAR(100)',
            'TestStartDate DATE',
            'TestStartTime TIME',
            'TestDurationMinutes SMALLINT(13) UNSIGNED',
            'TestRITScore SMALLINT UNSIGNED',
            'TestStandardError DECIMAL(4, 1)',
            'TestPercentile TINYINT UNSIGNED',
            'AchievementQuintile VARCHAR(12)',
            'PercentCorrect TINYINT UNSIGNED',
            'RapidGuessingPercentage DECIMAL(9, 4)',
            'FallToFallProjectedGrowth SMALLINT',
            'FallToFallObservedGrowth SMALLINT',
            'FallToFallObservedGrowthSE DECIMAL(5, 2)',
            'FallToFallMetProjectedGrowth VARCHAR(4)',
            'FallToFallConditionalGrowthIndex DECIMAL(5, 2)',
            'FallToFallConditionalGrowthPercentile TINYINT',
            'FallToFallGrowthQuintile VARCHAR(12)',
            'FallToWinterProjectedGrowth SMALLINT',
            'FallToWinterObservedGrowth SMALLINT',
            'FallToWinterObservedGrowthSE DECIMAL(5, 2)',
            'FallToWinterMetProjectedGrowth VARCHAR(4)',
            'FallToWinterConditionalGrowthIndex DECIMAL(5, 2)',
            'FallToWinterConditionalGrowthPercentile TINYINT',
            'FallToWinterGrowthQuintile VARCHAR(12)',
            'FallToSpringProjectedGrowth SMALLINT',
            'FallToSpringObservedGrowth SMALLINT',
            'FallToSpringObservedGrowthSE DECIMAL(5, 2)',
            'FallToSpringMetProjectedGrowth VARCHAR(4)',
            'FallToSpringConditionalGrowthIndex DECIMAL(5, 2)',
            'FallToSpringConditionalGrowthPercentile TINYINT',
            'FallToSpringGrowthQuintile VARCHAR(12)',
            'WinterToWinterProjectedGrowth SMALLINT',
            'WinterToWinterObservedGrowth SMALLINT',
            'WinterToWinterObservedGrowthSE DECIMAL(5, 2)',
            'WinterToWinterMetProjectedGrowth VARCHAR(4)',
            'WinterToWinterConditionalGrowthIndex DECIMAL(5, 2)',
            'WinterToWinterConditionalGrowthPercentile TINYINT',
            'WinterToWinterGrowthQuintile VARCHAR(12)',
            'WinterToSpringProjectedGrowth SMALLINT',
            'WinterToSpringObservedGrowth SMALLINT',
            'WinterToSpringObservedGrowthSE DECIMAL(5, 2)',
            'WinterToSpringMetProjectedGrowth VARCHAR(4)',
            'WinterToSpringConditionalGrowthIndex DECIMAL(5, 2)',
            'WinterToSpringConditionalGrowthPercentile TINYINT',
            'WinterToSpringGrowthQuintile VARCHAR(12)',
            'SpringToSpringProjectedGrowth SMALLINT',
            'SpringToSpringObservedGrowth SMALLINT',
            'SpringToSpringObservedGrowthSE DECIMAL(5, 2)',
            'SpringToSpringMetProjectedGrowth VARCHAR(4)',
            'SpringToSpringConditionalGrowthIndex DECIMAL(5, 2)',
            'SpringToSpringConditionalGrowthPercentile TINYINT',
            'SpringToSpringGrowthQuintile VARCHAR(12)',
            'LexileScore VARCHAR(6)',
            'LexileMin VARCHAR(6)',
            'LexileMax VARCHAR(6)',
            'QuantileScore VARCHAR(6)',
            'QuantileMin VARCHAR(6)',
            'QuantileMax VARCHAR(6)',
            'Goal1Name VARCHAR(100)',
            'Goal1RitScore SMALLINT UNSIGNED',
            'Goal1StdErr DECIMAL(10, 1)',
            'Goal1Range VARCHAR(7)',
            'Goal1Adjective VARCHAR(12)',
            'Goal2Name VARCHAR(100)',
            'Goal2RitScore SMALLINT UNSIGNED',
            'Goal2StdErr DECIMAL(10, 1)',
            'Goal2Range VARCHAR(7)',
            'Goal2Adjective VARCHAR(12)',
            'Goal3Name VARCHAR(100)',
            'Goal3RitScore SMALLINT UNSIGNED',
            'Goal3StdErr DECIMAL(10, 1)',
            'Goal3Range VARCHAR(7)',
            'Goal3Adjective VARCHAR(12)',
            'Goal4Name VARCHAR(100)',
            'Goal4RitScore SMALLINT UNSIGNED',
            'Goal4StdErr DECIMAL(10, 1)',
            'Goal4Range VARCHAR(7)',
            'Goal4Adjective VARCHAR(12)',
            'Goal5Name VARCHAR(100)',
            'Goal5RitScore SMALLINT UNSIGNED',
            'Goal5StdErr DECIMAL(10, 1)',
            'Goal5Range VARCHAR(7)',
            'Goal5Adjective VARCHAR(12)',
            'Goal6Name VARCHAR(100)',
            'Goal6RitScore SMALLINT UNSIGNED',
            'Goal6StdErr DECIMAL(10, 1)',
            'Goal6Range VARCHAR(7)',
            'Goal6Adjective VARCHAR(12)',
            'Goal7Name VARCHAR(100)',
            'Goal7RitScore SMALLINT UNSIGNED',
            'Goal7StdErr DECIMAL(10, 1)',
            'Goal7Range VARCHAR(7)',
            'Goal7Adjective VARCHAR(12)',
            'Goal8Name VARCHAR(100)',
            'Goal8RitScore SMALLINT UNSIGNED',
            'Goal8StdErr DECIMAL(10, 1)',
            'Goal8Range VARCHAR(7)',
            'Goal8Adjective VARCHAR(12)',
            'AccommodationCategories TEXT',
            'Accommodations TEXT',
            'TypicalFallToFallGrowth SMALLINT',
            'TypicalFallToWinterGrowth SMALLINT',
            'TypicalFallToSpringGrowth SMALLINT',
            'TypicalWintertoWinterGrowth SMALLINT',
            'TypicalWintertoSpringGrowth SMALLINT',
            'TypicalSpringToSpringGrowth SMALLINT',
            'ProjectedProficiencyStudy1 VARCHAR(100)',
            'ProjectedProficiencyLevel1 VARCHAR(100)',
            'ProjectedProficiencyStudy2 VARCHAR(100)',
            'ProjectedProficiencyLevel2 VARCHAR(100)',
            'ProjectedProficiencyStudy3 VARCHAR(100)',
            'ProjectedProficiencyLevel3 VARCHAR(100)',
            'ProjectedProficiencyStudy4 VARCHAR(100)',
            'ProjectedProficiencyLevel4 VARCHAR(100)',
            'ProjectedProficiencyStudy5 VARCHAR(100)',
            'ProjectedProficiencyLevel5 VARCHAR(100)',
            'ProjectedProficiencyStudy6 VARCHAR(100)',
            'ProjectedProficiencyLevel6 VARCHAR(100)',
            'ProjectedProficiencyStudy7 VARCHAR(100)',
            'ProjectedProficiencyLevel7 VARCHAR(100)',
            'ProjectedProficiencyStudy8 VARCHAR(100)',
            'ProjectedProficiencyLevel8 VARCHAR(100)',
            'ProjectedProficiencyStudy9 VARCHAR(100)',
            'ProjectedProficiencyLevel9 VARCHAR(100)',
            'ProjectedProficiencyStudy10 VARCHAR(100)',
            'ProjectedProficiencyLevel10 VARCHAR(100)',
            'PRIMARY KEY (TermName,StudentId,Course)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AasaScores'] = [
        'columns' => [
            'DistName CHAR(35)',
            'DistCode MEDIUMINT(7) UNSIGNED',
            'SchName CHAR(35)',
            'StateCode INT',
            'TestingGroup CHAR(20)',
            'PAS CHAR(13)',
            'TestUUId CHAR(36)',
            'OralReadingUIN CHAR(20)',
            'OralReadingLithocode CHAR(8)',
            'TestDate DATE NOT NULL',
            'ScanDate DATE',
            'OralReadingDate DATE',
            'LastName CHAR(75)',
            'FirstName CHAR(75)',
            'MI CHAR',
            'BirthDate DATE',
            'Gender CHAR',
            'Hispanic CHAR',
            'White CHAR',
            'Black CHAR',
            'Asian CHAR',
            'AmericanIndian CHAR',
            'NativeHawaiian CHAR',
            'GradeofStudent TINYINT UNSIGNED',
            'SaisId INT UNSIGNED NOT NULL',
            'SpecialEd CHAR',
            'ELClassification CHAR',
            'Migrant CHAR',
            'SES CHAR',
            'Other CHAR(10)',
            'TestCode CHAR(8) NOT NULL',
            'Format CHAR',
            'FormCode CHAR',
            'DocId CHAR(9)',
            'SpecialPaperVersion TINYINT UNSIGNED',
            'TotalPerformance TINYINT UNSIGNED',
            'PF CHAR',
            'TotalRawScore SMALLINT UNSIGNED',
            'TotalPtsPoss SMALLINT UNSIGNED',
            'TotalThetaScore FLOAT',
            'TotalSEMofTheta FLOAT',
            'TotalScaleScore SMALLINT UNSIGNED',
            'TotalSEMofScaleScore SMALLINT UNSIGNED',
            'Status CHAR',
            'MoveOnWhenReadingRequirement CHAR',
            'MoveOnWhenReadingScaleScore SMALLINT UNSIGNED',
            'RC1RawScore SMALLINT UNSIGNED',
            'RC1PtsPoss SMALLINT UNSIGNED',
            'RC1ThetaScore FLOAT',
            'RC1SEMofTheta FLOAT',
            'RC1ScaleScore SMALLINT UNSIGNED',
            'RC1SEMofScaleScore SMALLINT UNSIGNED',
            'RC1PerfLvl TINYINT UNSIGNED',
            'RC2RawScore SMALLINT UNSIGNED',
            'RC2PtsPoss SMALLINT UNSIGNED',
            'RC2ThetaScore FLOAT',
            'RC2SEMofTheta FLOAT',
            'RC2ScaleScore SMALLINT UNSIGNED',
            'RC2SEMofScaleScore SMALLINT UNSIGNED',
            'RC2PerfLvl TINYINT UNSIGNED',
            'RC3RawScore SMALLINT UNSIGNED',
            'RC3PtsPoss SMALLINT UNSIGNED',
            'RC3ThetaScore FLOAT',
            'RC3SEMofTheta FLOAT',
            'RC3ScaleScore SMALLINT UNSIGNED',
            'RC3SEMofScaleScore SMALLINT UNSIGNED',
            'RC3PerfLvl TINYINT UNSIGNED',
            'RC4RawScore SMALLINT UNSIGNED',
            'RC4PtsPoss SMALLINT UNSIGNED',
            'RC4ThetaScore FLOAT',
            'RC4SEMofTheta FLOAT',
            'RC4ScaleScore SMALLINT UNSIGNED',
            'RC4SEMofScaleScore SMALLINT UNSIGNED',
            'RC4PerfLvl TINYINT UNSIGNED',
            'WEPSOPFORawScore TINYINT UNSIGNED',
            'WEPSOPFOPtsPoss TINYINT UNSIGNED',
            'WEPEERawScore TINYINT UNSIGNED',
            'WEPEEPtsPoss TINYINT UNSIGNED',
            'WEPCERawScore TINYINT UNSIGNED',
            'WEPCEPtsPoss TINYINT UNSIGNED',
            'AdultTranscription CHAR',
            'AssistiveTechnology CHAR',
            'ReadAloudTestContent CHAR',
            'SignTestContent CHAR',
            'SimplifiedDirections CHAR',
            'PNPAnswerMasking CHAR',
            'PNPLineReader CHAR',
            'PNPColorContrast CHAR',
            'PNPMagnification CHAR',
            'PNPAlternateMousePointer CHAR(18)',
            'PNPMagnificationPercentage CHAR(3)',
            'IEPDesignatedMagnification CHAR',
            'IEPDesignatedLineReader CHAR',
            'IEPDesignatedColorOverlay CHAR',
            'IEPDesignatedOtherADEApproved CHAR',
            'ProctorName CHAR(100)',
            'ProctorCertified CHAR',
            'ProctorSelectedMagnification CHAR',
            'ProctorSelectedLineReader CHAR',
            'ProctorSelectedColorOverlay CHAR',
            'ProctorSelectedOtherADEApproved CHAR',
            'TimeonTestUnit1 MEDIUMINT UNSIGNED',
            'TimeonTestUnit2 MEDIUMINT UNSIGNED',
            'TimeonTestUnit3 MEDIUMINT UNSIGNED',
            'TimeonTestUnit4 MEDIUMINT UNSIGNED',
            'PRIMARY KEY (SaisId,TestDate,TestCode)',
            'FOREIGN KEY (SaisId) REFERENCES Students(SaisId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StateCode) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AzSci'] = [
        'columns' => [
            'SaisId INT UNSIGNED NOT NULL',
            'Season CHAR(2) NOT NULL',
            'AcademicYear YEAR NOT NULL',
            'SchoolEntity INT NOT NULL',
            'SciPl TINYINT UNSIGNED NOT NULL',
            'SciPF CHAR(1) NOT NULL',
            'SciRaw TINYINT UNSIGNED NOT NULL',
            'SciPoss TINYINT UNSIGNED NOT NULL',
            'SciScale SMALLINT UNSIGNED NOT NULL',
            'PsRawScore TINYINT UNSIGNED NOT NULL',
            'PsPtsPoss TINYINT UNSIGNED NOT NULL',
            'PsScaleScore SMALLINT UNSIGNED NOT NULL',
            'PsPerfLvl TINYINT UNSIGNED NOT NULL',
            'EsRawScore TINYINT UNSIGNED NOT NULL',
            'EsPtsPoss TINYINT UNSIGNED NOT NULL',
            'EsScaleScore SMALLINT UNSIGNED NOT NULL',
            'EsPerfLvl TINYINT UNSIGNED NOT NULL',
            'LsRawScore TINYINT UNSIGNED NOT NULL',
            'LsPtsPoss TINYINT UNSIGNED NOT NULL',
            'LsScaleScore SMALLINT UNSIGNED NOT NULL',
            'LsPerfLvl TINYINT UNSIGNED NOT NULL',
            'PRIMARY KEY (SaisId,Season,AcademicYear)',
            'FOREIGN KEY (SaisId) REFERENCES Students(SaisId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (SchoolEntity) REFERENCES PossibleSchools(SchoolId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AzCivicsScores'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AzCivicsDate DATE NOT NULL',
            'AzCivicsScore TINYINT UNSIGNED NOT NULL',
            'AzCivicsQuestions TINYINT UNSIGNED NOT NULL',
            'AzCivicsPass BOOLEAN NOT NULL',
            'PRIMARY KEY (StudentId, AzCivicsDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['CprCertifications'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'CprCertificationDate DATE NOT NULL',
            'PRIMARY KEY (StudentId, CprCertificationDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['SchoolAwards'] = [
        'columns' => [
            'SchoolAwardId INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'SchoolAwardType VARCHAR(50) NOT NULL',
            'StudentId INT UNSIGNED NOT NULL',
            'SchoolAwardStart DATE NULL DEFAULT NULL',
            'SchoolAwardEnd DATE NULL DEFAULT NULL',
            'SchoolAwardDescriptionOverride TEXT NULL DEFAULT NULL',
            'PRIMARY KEY (SchoolAwardId)',
            'FOREIGN KEY (SchoolAwardType) REFERENCES PossibleSchoolAwards(SchoolAwardType) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AzellaScores'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AzellaTest VARCHAR(25) NOT NULL',
            'AzellaDate DATE NOT NULL',
            'AzellaScore SMALLINT UNSIGNED NOT NULL',
            'AzellaProficiencyLevelCode VARCHAR(10) NOT NULL',
            'PRIMARY KEY (StudentId, AzellaTest, AzellaDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AzellaTest) REFERENCES PossibleAzellaTests(AzellaTest) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AzellaProficiencyLevelCode) REFERENCES PossibleAzellaProficiencyLevels(AzellaProficiencyLevelCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    $AzSIS_SQL_Tables['AimsScores'] = [
        'columns' => [
            'StudentId INT UNSIGNED NOT NULL',
            'AimsSubtestCode CHAR(1) NOT NULL',
            'AimsDate DATE NOT NULL',
            'AimsScore SMALLINT UNSIGNED NOT NULL',
            'AimsProficiencyLevelCode TINYINT UNSIGNED NOT NULL',
            'PRIMARY KEY (StudentId, AimsSubtestCode, AimsDate)',
            'FOREIGN KEY (StudentId) REFERENCES Students(StudentId) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AimsSubtestCode) REFERENCES PossibleAimsSubtests(AimsSubtestCode) ON UPDATE CASCADE ON DELETE RESTRICT',
            'FOREIGN KEY (AimsProficiencyLevelCode) REFERENCES PossibleAimsProficiencyLevels(AimsProficiencyLevelCode) ON UPDATE CASCADE ON DELETE RESTRICT'
        ],
        'values' => null,
    ];

    return $AzSIS_SQL_Tables;
}
