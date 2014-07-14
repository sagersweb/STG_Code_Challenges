<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lorem Ipsum Generator</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<?php

function randomizeArray($string_in, $number_of_words){
	$arraylist = explode(" ",$string_in);
	shuffle($arraylist);
	$string_out = "";
		$sentence = rand(6,17);
	for($x=1; $x<=$number_of_words; $x++){
		shuffle($arraylist);
		if($x % $sentence==0){
			$string_out = rtrim($string_out) . ". " . ucfirst($arraylist[1]) . " ";
			$sentence = rand(6,17);
			}
		else{
			$string_out .= $arraylist[1] . " ";
			}
		}
		return(ucfirst($string_out));
}
	
	
	function GenerateLorem($numberofwords,$ipsumtype){
		
		$LoremIpsum = "lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque rutrum augue eu neque ullamcorper placerat aenean porttitor aliquet nulla vel aliquet curabitur nibh urna volutpat sed volutpat at egestas vel ligula nullam sit amet pretium turpis phasellus nec ligula mi duis a lacus et tellus blandit suscipit nunc vitae felis vel arcu tristique egestas eget vitae purus integer tristique facilisis erat nec suscipit magna dignissim sit amet praesent sed laoreet justo pellentesque massa mauris interdum non facilisis id luctus a nulla sed eu aliquam dolor nullam dui neque aliquet sit amet ullamcorper et lacinia et leo aenean adipiscing orci ornare dapibus erat a ultrices orci fusce imperdiet enim nec arcu faucibus posuere vivamus tristique metus urna vitae iaculis felis tempus eget donec sollicitudin sodales sapien at tempus vivamus sed ornare nulla tristique interdum augue nulla lobortis dui quis fermentum tincidunt metus ante luctus dolor ut venenatis risus dui et odio donec quis leo sodales quam fringilla aliquam phasellus ullamcorper sodales imperdiet nulla gravida sapien vel tempor fringilla donec viverra dapibus suscipit pellentesque purus ligula imperdiet sit amet fringilla et scelerisque at magna quisque egestas eros massa fringilla dapibus eros ultrices sit amet praesent aliquet elit blandit pulvinar tempor maecenas adipiscing vitae ante quis placerat curabitur ornare erat vitae pretium sollicitudin maecenas dignissim tortor augue a accumsan erat sagittis ut interdum et malesuada fames ac ante ipsum primis in faucibus aliquam urna sapien ultrices sit amet enim nec aliquam elementum nisl aenean pharetra mattis viverra pellentesque ullamcorper urna non laoreet lobortis";
		
		$GeographyIpsum = "absolute humidity absolute location accessibility resource accessibility acid rain active volcano aerosol air mass alluvia alluvial soils altitude anthracite archipelago ash atlantic seaboard fall line atlas atmosphere badlands base level batholith bay beach bedrock biological diversity biosphere biota bituminous boundary break-in-bulk point butte caprock carrying capacity cartographer cbd chaparral chinook cinder cone climax vegetation confluence coniferous continent continental climate continental divide continentality contour lines conurbation core area coulee crater crop-lien system crust cryosphere culture culture hearth de facto segregation de jure segregation deciduous forest degree degree day delta demography discriminatory shipping rates dome dormant volcano dry farming economies of agglomeration elevation emergent coastline enclave equator erratic escarpment estuary evapotranspiration exotic stream extinct volcano exurb fall line fallow fault fault-block mountain fault zone federation feral animal fish ladder focality functional diversity (geography) geomorphology geosphere ghetto glacial till glaciation glacier globe great circle route grid growing season gulf harmonic tremor hazardous waste hearth heavy industry hemispheres d horizon hot spot humus hydrography hydroponics hydrosphere ice age igneous rock indentured labor indigo inertia costs of location insular international date line intervening opportunity intracoastal waterway system isohyet jurisdiction jhoom cultivation karst kudzu lacustrine plain lateral blast latitude lava leaching leeward legend legume life-cycle stage light industry lignite lithosphere lithospheric plates loess longitude magma mantle map maritime climate mediterranean climate mesa mesquite metamorphic rock metes and bounds metropolitan coalescence monadnock moraine mudflow multilingual municipal waste new england nodal region nuclear family ocean open range orographic rainfall outwash overburden palisades panhandle permafrost physiographic region physiography piedmont plate tectonics platted land pleistocene plural society polynodal populated place post-industrial precambrian rock presidio prevailing winds primary product primary sector prime meridian pueblo quaternary sector rail gauge rainshadow region resource riparian rights riverine scale scarp scots-irish sea level second home secondary sector sedimentary rock seismograph settlement sharecropping shield shield volcano silage sinkhole site situation smog standard metropolitan statistical area snowline soluble space economy spatial complementarity spatial interaction spreading ridges staple product stratovolcano subduction zone sustainable yield taiga temperature inversion tephra territory tertiary sector threshold time distance topographic map topography township and range transferability transhumance tree line tree rings tropics tundra underemployment underpopulation uniform region vent viscosity volcanic avalanche volcano water table windward wind winnowing white revolution water pollution weather water weathering zoning";
		
		$MathIpsum = "absolute value acute angle acute triangle additive identity additive inverse adjacent angles angle arc area associative property of addition associative property of multiplication average axis of symmetry base bisect box and whisker plot Cartesian coordinates central angle chord circle circumference coefficient collinear combination common factor common multiple commutative property of addition commutative property of multiplication complementary angles composite number cone congruent constant coordinate plane coplanar counting numbers counting principle cross product cube cylinder data decimal number degree denominator dependent events diagonal diameter difference digit distributive property dividend divisor ellipse equation equilateral triangle equivalent equations equivalent fractions error of measurement evaluate even number event exponent equivalent fractions factor factorial face formula fraction frequency frequency table graph greatest common factor horizontal hypotenuse identity property of addition identity property of multiplication improper fraction independent events inequality infinity inscribed angle inscribed polygon integers intercept intercepted arc interpolation intersecting lines inverse inverse operations irrational number isosceles triangle least common denominator least common multiple like fractions line line of symmetry line segment locus logic lowest terms mean median midpoint mixed number mode multiple multiplicative identity multiplicative inverse mutually exclusive events natural numbers negative number normal number line numerator obtuse angle obtuse triangle octagon odd number operation opposites ordered pair origin outcome parallel parallelogram pentagon percent perimeter permutation perpendicular pi plane point polygon polyhedron positive number power prime number probability product proper fraction proportion protractor pyramid Pythagorean Theorem quadrant quadrilateral quotient radius range rate ratio rational number ray real numbers reciprocal rectangle reflection regular polygon repeating decimal rhombus right angle right triangle root rotation sample space scale drawing scalene triangle scattergram scientific notation set similar simplifying skew lines slope solution sphere square square root statistics stem and leaf plot straight angle supplementary angles surface area terminating decimal translation transformation transversal trapezoid tree diagram triangle variable vertex vertical angles volume whole number x-axis x-intercept y-axis y-intercept zero";
		
		$CheeseIpsum = "ricotta etorki saaland pfarr abertam american cairnsmore baladi muenster ulloa nantais brie aged gouda saint-andre estero gold reserve extra mature wensleydale danish feta hooligan esrom caboc basing ardi gasna afuegal pitu exmoor blue kenafa huntsman delice de bourgogne abbaye de citeaux airag northumberland kefalotyri ambert calcagno emental grand cru manchego edelpilz saga hereford hop gorgonzola parmigiano-reggiano herrgardsost humboldt fog saint-marcellin harlech dry jack roncal saint agur salers colby ashed pyramid explorateur kervella affine doppelrhamstufel danablu danbo alverca cabecou hipi iti mizithra hubbardston blue cow colby-jack kapiti kikorangi helix emlett baguette laonnaise samso acapella saanenkaese aged chelsea irish cheddar bay blue denhany dorset drum double gloucester acorn stichelton swiss abbaye de belloc anthotyro grana padano king island cape wickham brie gouda durrus kasseri king river gold boerenkaas abbots gold nokkelost provolone harbourne avonlea ameribella dunbarra danish fontina bavarian bergkase dunlop saint felicien taleggio sage derby caprice des dieux mozzarella basket zamorano ardsallagh esbareich dutch mimolette kashta armenian string aromes au gene de marc kernhem doolin bath daralagjazsky blue tomme de savoie haloumi duroblando niolo stilton calenzana affidelice au chablis saint albray allgauer emmentaler zanetti grana padano aragon caerphilly edam oregon blue vein xynotyro dolcelatte balaton dauphin anneau du vic-bilh kiri bakers bandal cambazola asiago cahills irish porter cheddar bear hill dunbarton blue ubriaco baylough sap sago emmental havarti dunsyre blue halloumi havilah epoisses de bourgogne dreux a la feuille cahills whiskey klosterkaese klosterkaese adelost rembrandt gouda ami du chambertin devon garland monterey jack feta sainte maure fourme de montbrison abbaye de belval caciotta al tartufo armenian string buffalo mozzarella alpha tolman saint-nectaire neufchatel zanetti parmigiano reggiano saint-paulin english farmhouse cheddar zimbro dubliner dorset blue vinney devon blue baby swiss sancerre kashkaval airedale barrys bay cheddar parmigiano caciotta danish blue avaxtskyr aisy cendre camembert de normandie evora de lalentejo delice des fiouves pepper jack pecorino romano camembert derby american farmhouse cheddar evansdale farmhouse brie appalachian kugelkase ardrahan duddleswell abbaye du mont des cats babybel appenzeller dessertnyj belyj abondance cachaille nettle meadow kunik herriot farmhouse applewood caciocavallo autun leonora goat naboulsi roquefort herve banon cabrales kadchgall";
		
		
		switch($ipsumtype){
			case "LoremIpsum":
			echo(randomizeArray($LoremIpsum, $numberofwords));			
			break;
			case "GeographyIpsum":
			echo(randomizeArray($GeographyIpsum, $numberofwords));
			break;
			case "MathIpsum":
			echo(randomizeArray($MathIpsum, $numberofwords));
			break;
			case "CheeseIpsum":
			echo(randomizeArray($CheeseIpsum, $numberofwords));
			break;
		}
	}
?>
</head>
<body>
<div class="results">
	<p style="text-align:center"><a href="index.php">Generate Another</a></p>
	<?php
	GenerateLorem($_POST["numberofwords"],$_POST["ipsumtype"]);
	?>
</div>
</body>
</html>