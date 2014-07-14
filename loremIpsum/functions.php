<?php

function randomizeArray($string_in, $number_of_words){
	$paragraphlength = array(5,7,11,13,17,19);
	$arraylist = explode(" ",$string_in);
	shuffle($arraylist);
	$string_out = "";
		$sentence = $paragraphlength[rand(0,count($paragraphlength)-1)];
		$paragraph = 0;
	for($x=1; $x<=$number_of_words; $x++){
		shuffle($arraylist);
		if($x % $sentence==0){
			$string_out = rtrim($string_out) . ". ";
			$sentence = $paragraphlength[rand(0,count($paragraphlength)-1)];
			$paragraph++;
			if ($paragraph >=5){
				$string_out .="<br /><br />";
				$paragraph=0;
				}
			 $string_out .= ucfirst($arraylist[1]) . " ";
			}
		else{
			$string_out .= $arraylist[1] . " ";
			}
		}
		return(ucfirst($string_out));
}
	
	
	function GenerateLorem($numberofwords,$ipsumtype){
		
		$LoremIpsum = "arcu nunc maecenas dolor amet eu malesuada fames lorem phasellus gravida adipiscing at odio mattis posuere aliquet eros tempus magna nulla dapibus nec neque nullam primis ullamcorper orci venenatis augue aliquam id dignissim suscipit tincidunt blandit pharetra facilisis in non fusce sagittis praesent urna iaculis vitae risus donec sit ipsum porttitor sollicitudin vivamus pulvinar mauris turpis mi vel massa dui elit tempor interdum nisl tristique lacinia a justo ac fermentum tellus enim metus quis curabitur fringilla erat purus scelerisque ut leo nibh et accumsan placerat egestas lobortis sapien sed viverra elementum felis aenean ornare volutpat sodales lacus ante pellentesque integer quam rutrum luctus pretium duis tortor consectetur ultrices imperdiet faucibus ligula laoreet eget quisque";
		
		$GeographyIpsum = "biota map scarp prevailing caprock delta archipelago pueblo statistical active standard air monadnock lacustrine seismograph focality legend snowline geography capacity point divide hemispheres growing equator white winnowing windward plain date sharecropping blast plate seaboard moraine farming rainfall family rings great plates accessibility elevation evapotranspiration biological indigo taiga temperature transhumance silage hydrography sinkhole continental crust palisades waste diversity weathering meridian rail rain yield karst aerosol horizon open federation stream hazardous heavy ash tectonics sustainable secondary labor latitude harmonic interaction indentured ladder facto prime legume winds riparian overburden butte life-cycle badlands staple carrying escarpment scots-irish d industry zone precambrian sector international lines conurbation alluvia crater tephra cone animal leaching hot tree hearth climax scale lava continentality feral ice magma erratic stratovolcano emergent exurb weather inversion pollution tropics uniform zoning volcanic range township costs rights jurisdiction tertiary rock hydroponics mesquite nuclear acid mass geosphere polynodal atmosphere intracoastal de degree functional coastline home location spot complementarity spreading altitude base discriminatory dome bay riverine kudzu bedrock beach crop-lien mantle settlement shield leeward of vent mesa season continent cultivation break-in-bulk presidio ridges atlantic jhoom dry route region fault transferability level mudflow sea inertia rates fall opportunity absolute nodal chaparral spatial plural igneous time vegetation panhandle avalanche batholith cbd segregation viscosity bounds subduction cartographer orographic glacier hydrosphere alluvial biosphere core fish coalescence mediterranean lithospheric wind underemployment waterway glacial metamorphic land maritime boundary isohyet globe municipal piedmont territory table distance light stage and ocean metropolitan culture gulf site pleistocene topographic glaciation situation enclave england lignite resource society cinder metes extinct outwash jure lateral shipping quaternary anthracite product mountain tremor populated insular permafrost day loess coniferous cryosphere intervening primary new physiography space exotic threshold confluence estuary age geomorphology humus gauge dormant line grid soils atlas post-industrial chinook lithosphere water climate economies revolution platted coulee underpopulation multilingual humidity circle topography system sedimentary second fault-block agglomeration demography volcano place area longitude tundra ghetto physiographic rainshadow deciduous economy bituminous forest smog till contour soluble fallow";
		
		$MathIpsum = "pi number power mode equations supplementary independent vertical scattergram circumference ellipse equilateral hypotenuse cartesian whole real symmetry repeating normal diameter average combination ordered measurement associative horizontal rectangle dependent opposites factorial quadrilateral degree digit rate mixed inscribed root intercepted of graph additive positive range data translation integers locus fraction central origin multiplicative equation diagonal exponent like polygon perpendicular notation x-axis parallel greatest zero numbers coefficient octagon transversal median circle regular pyramid adjacent pentagon point table improper line angle commutative square product bisect reciprocal y-axis reflection coordinate absolute operation x-intercept lowest terminating proper whisker frequency simplifying axis multiple cube prime denominator diagram quadrant slope solution evaluate plane pair counting coordinates y-intercept rhombus segment face inequality infinity property numerator pythagorean right multiplication permutation mean quotient operations cone statistics coplanar percent formula variable divisor skew decimal distributive base proportion protractor leaf perimeter scale rational congruent surface interpolation and common volume exclusive outcome logic collinear area box tree intersecting vertex obtuse inverse value lines rotation dividend fractions similar event even least isosceles parallelogram composite natural principle chord constant events cross sample transformation negative trapezoid plot sphere equivalent ray arc terms midpoint irrational mutually drawing triangle straight cylinder odd probability acute scalene difference intercept space set stem error identity complementary addition angles radius factor theorem polyhedron scientific ratio";
		
		$CheeseIpsum = "danish exmoor aisy swiss bergkase barrys armenian estero colby ulloa savoie cape english gorgonzola dunlop grana appalachian tolman rembrandt des etorki sainte abondance dauphin allgauer sago kiri leonora romano acapella bakers basket cabrales esrom nettle basing kasseri danablu devon la dolcelatte herrgardsost colby-jack airedale anneau saint hereford hill citeaux lalentejo goat drum ardrahan vic-bilh esbareich saint-nectaire huntsman hipi calcagno kadchgall hubbardston ami caerphilly gene adelost feta stichelton asiago ardi string evora taleggio evansdale gold edam kunik applewood du caciotta zanetti dunbarton bay buffalo parmigiano-reggiano harlech montbrison doppelrhamstufel saint-andre roquefort chambertin laonnaise stilton ricotta caciocavallo provolone au acorn river kefalotyri abbaye muenster iti pecorino afuegal neufchatel naboulsi babybel belloc aromes whiskey derby haloumi maure nokkelost affidelice airag dreux avaxtskyr dessertnyj aged de alverca havarti dorset duddleswell northumberland hop havilah dubliner a cru explorateur reserve gloucester american emmentaler caprice saaland emlett boerenkaas emmental cabecou feuille xynotyro wensleydale garland fiouves ardsallagh monterey kashta avonlea mimolette blue dry cow gouda emental kenafa bandal wickham kervella epoisses dunsyre sancerre sap double doolin tomme mont saint-paulin farmhouse denhany marc cendre mizithra dutch saint-marcellin saanenkaese anthotyro halloumi danbo dieux roncal durrus chelsea baby albray manchego cheddar bear niolo abbots calenzana belyj pyramid fourme affine salers caboc cairnsmore meadow agur jack al saga appenzeller island cats pepper harbourne kugelkase bath camembert kikorangi humboldt bourgogne delice dunbarra felicien ashed extra mozzarella reggiano baguette autun bavarian irish grand herve belval vein baladi samso cahills aragon duroblando pfarr kernhem kashkaval helix klosterkaese ameribella balaton parmigiano ubriaco vinney zamorano daralagjazsky edelpilz herriot oregon fog nantais gasna porter brie cambazola king cachaille alpha hooligan padano baylough normandie chablis pitu sage abertam banon mature tartufo fontina ambert kapiti zimbro";
		
		$MedicalIpsum = "emotions dislocation bruise pulse myopia type pinna nutrition vitreous cartilage ibuprofen body strep inhale varicella chemotherapy bronchodilator eustachian polydipsia hyperopia unit immunotherapy skin cord operation reflex ketones action stethoscope hydrocortisone astigmatism urticaria violence epiglottis allergist larynx fats pressure disinfectants media caries exercise-induced fatty canal cough ketoacidosis infection cancer hormone navel growth pediatric tubes prosthesis neuropathy petroleum tendons nits epidermis bank perspiration neurologist intensive mucous tympanogram flow lunula sphenopalatineganglioneuralgia orthodontist histamine malocclusion exhale retinopathy eardrum fiber asthma tonsillectomy nausea stapes arteries canals endocrinologist glycemic bacteria rescue ear tests fever puberty obstruction rhinovirus animal sebaceous addiction mites dietitian care controller surgery corticosteroids tube otolaryngologist conjunctivitis exchange teeth abrasion radiologist lens chromosomes beta antihistamines cerumen seizure scar melanin otitis humidifier meter iris keratin cerebellum anesthesia dust peak anus ophthalmologist glands worker bolus heredity triggers laparoscopy therapist cast glucose maximus tinnitus nasal sclera stat airways inhaler enuresis gingivitis involuntary fluoride laxatives function spirometer bowels glucagon optician alcoholism screen glycosylated gluteus vaccine spacer abdominals node insulin canine grieving kidney pollen platelets astringents immune depression gurney nicotine bone fracture polyphagia frostbite peroxide cortex airway occupational sulfites sebum symptoms tobacco dyslexia hypoglycemia immunizations contagious guard external eczema cavity resistance palate ultrasound lymph whitehead hyperglycemia cells cornea cardiologist veins biopsy papillae night pump level arthritis nebulizer red membrane index depressant virus food diaphragm saliva blackhead genes educators flare-up retainer epistaxis pilomotor joints aerobic chronic electroencephalogram hay enamel complete tap heat allergy-triggered cochlea dehydration lenses pimple sternutation lung wheeze juices microscope contact social congestion meal certified stress lacrimal pulmonary genetics spinal exhaustion medications gums hemangioma jelly hormones semicircular glycogen rheumatologist mellitus white pancreas diagnosis dandruff nearsighted bruxism retina nervous pneumonia farsighted counting hydrogen diarrhea carbohydrate alignment pupil floss gastroenteritis yawn junk braces zoonosis marrow allergen umbilical cone wisdom therapy hemoglobin taste polyuria constipation frenulum buds anemia zoster muscle suture gastric test acids amputate count cerebral oncologist scoliosis urine dermatologist vertebrae x-ray bronchial activity bronchoconstriction hematoma plan islet influenza plaque allergy retractions autoimmunity tragus mucus dander diabetes shot blood acne pulmonologist injections antibiotics urinalysis decongestants system nephropathy optometrist";
		
		$PsychologicalIpsum = "experience-sampling characteristics difference apparent informational psychosomatic conditioning healing free scans thalamus abnormal behaviorism model sample discriminative projective measures chronic psychologist set addiction therapy schedules ageism variable-ratio rehearsal interdependent phobia specific acquisition proximal body styles phenomenon validity diathesis-stress stimuli encoding trichromatic flooding attention norm altruism comfort transduction five-factor apperception categorization psychometric pain senses distal timbre sensation ritual illusory concepts gestalt synapse organization psychosocial hormones dependence association genetics loudness consensual analysis induced inductive episodic common units association prototype evolutionary intimacy longitudinal dichotic positive pons acute learning dream anorexia nervosa language client incentives object self-actualization behavior inferences long-term human-potential attitude decision auditory helplessness cerebellum countertransference systematic hemispheres reinforcers likelihood intelligence fixation personality clinical fear response standard opponent-process rational-emotive control neurotic dendrites psychodynamic norms with autonomic amnesia estimate theory fluid episode psychobiography traits prejudice principle making adaption pattern error phi crystallized justification volley vestibular psychoactive parasympathetic design cross-sectional illusion situational reasoning movements frequency reciprocal comorbidity variability parietal prosocial inputs range psychoanalysis emotional reconstructive nonconscious reciprocity instincts disease emotion heredity hozho need resistance tend-and-befriend attribution human unconditioned role constancy behaviors law proximity closure heuristics problem processes attachment independent cochlea motion case mechanisms temporal biological callosum psychiatrist conformity construals anxiety intelligence successive pastoral representativeness natural division deviation instinctual debriefing frustration-aggression genetics audience dsm-iv-tr memory distinction law selective self-perception soma predictive circadian self receptors absolute preconscious transmission distribution mean within-subjects conservation control nerve variable-interval memory stress sociobiology reinforcement perception formation psychologists guided lucid frame structuralism cues dreaming motor client-centered pitch mri resting polarization coping difference normal worker speech testosterone id behaviorist correlational nervous listening anticipatory phobias altruism aids semantic genotype image phenotype psychoanalyst protocols levels-of-processing contextual lesions selves refractory spontaneous top-down drift fixed-interval hypothesis measures lightness statistics reflex superego a peace neuron area sympathetic validation dynamics norm channels covariation dependent procedures self-concept chunking identity genocide just wellness chronological specificity stress context self-esteem participant contingency generalized ion achievement test hypnotizability horizontal elaborative syndrome parenting stages bipolar effects tendency major inventory inferential ambiguity generalization groupthink median study for retardation punishment engram contingency hypothesis hue residual by catharsis photoreceptors spontaneous-remission diffusion conditioning threat counselor effect burnout bias contact anchoring mental mood hierarchy method discovery rules content standardization meta-analysis c interference perception expectancy relative accommodation classrooms shaping olfactory panic electroconvulsive roles negative prefrontal group norms goal-directed health deductive diagnosis thematic aversion types management physical phantom rapid sleepiness buttons physiological paradox type anxiety ganglion consistency recency forms contours somatosensory counseling moderator production implosion self-awareness bystander stem instrumental agoraphobia internalization genes reinforcer nature-nurture daytime bottom-up learning-performance cognitive definition self-report three-term interneurons uses drugs counterconditioning ego unconscious aggression divergent psychopathological life-change primacy drives yerkes-dodson confounding kinesthetic depressive schemes reinforcement memories variable priming learned aggression schizophrenic perceived interaction saturation split-half environmental complementary methods cerebrum schemas function functional self-serving data relaxation science endocrine work basilar impulsive limbic meditation stereotype motivation mnemonics membrane availability colors adaptation intervention insight social-learning imprinting sense insomnia thinking amygdala short-term functioning somatic between-subjects stimulus criterion fight-or-flight automatic system analytic regard descriptive eye biomedical internal biofeedback capture eq recognition fate operational creativity declarative psychopharmacology measure explicit identification lobe schedule of humanistic classical test-retest patient storage procedural variables test sensory jigsaw ecological inference coefficient bulimia posttraumatic archetype validity representative organismic lobotomy cerebral frontal rhythm experimental neuropathic alzheimers crystallization belief-bias attributions serial hiv heritability zygote placebo gate-control reversal emotion homeostasis recall support fixed-ratio period brightness cones practices synaptic inhibitory retrieval investment stimulus psychosurgery brocas developmental reliability neuromodulator theories similarity assessment distinctiveness implicit obsessive-compulsive curve assimilation neurotransmitters scientific social controlled parental recognition blocking disparity theory glia transference variable age modeling cutaneous non-rem gender phobia parallax excitatory terminal possible in-groups investigations dissociative space organizational socialization optimization signal self-handicapping phonemes preattentive general algorithm desensitization psychological shyness hypothalamus cultural elaboration personality recovery response receptive behavior medulla aversion reliability movement visual consciousness delusions self-efficacy social central on compensation animal compliance collective needs consistency axon solving ecology tolerance psychology psychologist fundamental population double-blind insanity sleep confirmation influence manifest psychotherapy repression map functionalism foundational promotion fovea nociceptive optics dissonance unconditional optic hypnosis discrimination out-groups sleep formal pheromones set bulb coping convergence pet orientation retina all-or-none peripheral central reasoning disorder limb conditioned action perspective search overregularization neuroscience approximations stimulus-driven position determinism determinism threshold corpus punisher modification controversy positive normative field maturation ground extinction relations heuristic selection psychic attribution latent learning generativity amacrine extinction morality hippocampus therapies constraints reticular amnesia think-aloud prophecy brain retinal demand unconscious neurons manic physiology shape cognition electroencephalogram psychotic detection disorders quotient stressor observational cells cortex stigma place fixedness estrogen psychophysics equity apnea dispositional psychology wisdom significant egocentrism working correlation child-directed defense centration etiology self-fulfilling perceptual observer metamemory size figure transfer-appropriate operant judgment pituitary development parallel in-group partial psychoneuroimmunology responsibility behavioral occipital and persuasion biopsychosocial job psychometrics noticeable rods gland primary stereotypes cognition processing shamanism mode potential appraisal";
		
		$AnimalIpsum = "akita siberian pointer bat lynx antelope hercules malamute akbash horn birds pike coral dunker vulture shepherd oriole fossa puffer x-ray shrew himalayan panther vervet snail kiwi fousek spider frilled russian alpine woodpecker jellyfish crab-eating fennec elephant tarantula ant ocelot grasshopper crab gopher tamarin nurse flat mayfly cheetah dormouse platypus turkish discus angora seal leaf-tailed flounder lizard siamese basset wildebeest foxhound bracke moorhen english deutsche hare bolognese puss macaroni rattlesnake barn loon chipmunk charles river wolfhound reef rocket donkey giant meerkat chinese greenland wolf umbrellabird mist mole urchin dogue cocker tetra forest west coyote pig warthog collared beetle dogo balinese javan carolina dhole zonkey coonhound bavarian dane red-handed wrasse weasel dugong dragon setter airedale poodle eleuth field alligator clam okapi bee eskimo insect silver pheasant emu reindeer pit lankan bay centipede bornean javanese guppy pika goat millipede bottle spadefoot serval egyptian budgerigar collie hippopotamus crane fin nightingale stoat termite vole radiated neanderthal maine dalmatian hedgehog mule geoffroys ragdoll paradise macaw spaniel flying dodo human monitor horned angelfish electric alaskan bactrian mastiff epagneul bullfrog markhor billed caterpillar macaque sri uakari common baboon badger adelie bison pool schnauzer cottontop puffin molly patas horseshoe fish snowshoe boston tortoise persian ainu desert butterfly ostrich pont old rock peccary squid brown shrimp squirt blue quoll panda mau bluetick bordeaux basking norfolk royal poison sea gharial impala magpie tuatara afghan liger axolotl zebra pelican slow fox husky lobster sparrow bonobo humboldt moose komodo gar snowy of otter lemur avocet stag pied monte catfish swiss heron horse faced chinchilla pademelon puma octopus newfoundland dachshund basenji lowland toucan quetzal bloodhound arctic kelpie dusky koala caiman retriever lemming dragonfly spiny spoonbill possum manta hyrax neapolitan coon whale glow capuchin norwegian tibetan clown spectacled water devil tawny gorilla booby hyena salamander grizzly caracal ibis bandicoot clumber rottweiler sperm wasp chameleon starfish cat cassowary canaan tree keel stellers dachsbracke chin appenzeller drever chow pug havanese barb pink sumatran camel aye woolly gibbon cavalier raccoon howler eastern kudu opossum bombay labradoodle cesky snapping galapagos owl pygmy dart iberia zorse abyssinian asiatic walrus mouse woodlouse killer humpback gila birman springer crested civet king porcupine grey bedlington argentino de worm swan bearded roseate chinook olm marmoset hornet coati skater polar cattle little sheep sloth cuttlefish gerbil chicken turtle dolphin great quail mountain albatross hammerhead golden toad manatee striped boar asian kangaroo clawed green kakapo spitz lionfish chinstrap brazilian parrot tapir monster giraffe nosed indri clouded dog hermit finnish ibizan fur magellanic masked turkey rabbit border edible chihuahua african knee earwig estrela wild australian audemer fly penguin bengal jaguar dogfish star fire-bellied mongoose hummingbird llama capybara bull numbat armadillo mongrel malayan black minke cross eel hound beaver cichlid white marsh sabre-toothed japanese deer coat burmese bichon entlebucher tasmanian coated tzu anatolian yak greyhound goose saola monkey crocodile lacy somali cow frigatebird tarsier falcon sponge flamingo long-eared duck fighting orang-utan leopard barracuda buffalo staffordshire bee-eater stingray pinscher rat barnacle newt pond boxer prawn snake zebu fairy gentoo piranha squirrel chimpanzee tiffany hamster irish darwins moray gecko wallaby yellow-eyed american mammoth beagle iguana bobcat tang french tiger cockroach cuscus bernese south wombat lion doberman echidna welsh stick affenpinscher german sun emperor china whippet indochinese skunk proboscis honey guinea saint borneo sand frise ferret bulldog fishing shih bumble jack jackal seahorse dwarf sheepdog curly kingfisher russel moth palm widow anteater buzzard vampire frog dingo pekingese chamois rhinoceros tropicbird western bongo yorkshire mandrill bush maltese bird greater wolverine ladybird fowl robin labrador glass eagle quokka chesapeake shark cairn bear uguisu thorny banded red grouse dollar highland ray burrowing cougar indian purple scorpion binturong oyster bernard marine rockhopper aldabra corgi land boykin terrier slug harrier peacock";
		
		$ColorIpsum="fern verdigris peach-orange plum india devil grape lazuli chinese coffee tan brandeis bangladesh celadon bottle gainsboro imperial pearl livid blueberry bubble zinnwaldite skobeloff vanilla selective gray china sandstorm power cornflower york liver blizzard amethyst red-tangelo sacramento sheen green-cyan misty turquoise meringue eggplant little bole blanched flavescent ou sap goldenrod gold lilac coral mexican madder dazzle grey ufo lace bud peach nyanza metallic desaturated otter radical lemon spring apple silk solid grape eyes magenta vegas spartan sunglow green-cyan aqua battleship glory golden kelly aurometalsaurus palatinate jasper june rubine moss coral tractor carnelian rusty meat periwinkle cedar ash air drab puce orange paris celestial daffodil field arylide pineapple tickle mauve liver duke persimmon tango bill bedazzled sunburst picton cerulean bubbles baby north almond razzle oâ€™ruby gum corsa pansy bleu firebrick maya blue telemagenta onyx citron donkey saddle hollywood orange-red latte cafe halayÃ  cream tangerine cerise chocolate fire cornsilk lava wild nadeshiko ocean mellow penny cordovan russet rhythm raspberry piggy barn fusion sunray congo charcoal azureish maize violet-blue jacket pear lava vivid capri vermilion brown soap charleston irresistible chalice egg peel mint pastel mauve dollar red-violet strawberry sienna wisteria sandy mulberry berry xanadu phthalo hansa navy la blast-off wood myrtle bone carolina tomato de aero yankees roman texas true rosso jungle byzantine debian goldenrod and deer ultramarine black cornflower almond orange beige popstar sand steel leather queen chiffon cardinal champagne outer fuchsia magenta ruddy wheat quinacridone stizza green candy heliotrope thulian portland smalt shadow office jam rackley papaya trolley coyote silver engine cotta magnolia cocoa lavender mode tropical thistle majesty spanish red-brown aquamarine fallow mountain granny violet khaki bitter yonder dip schauss cambridge whip dandelion dregs jelly lapis oxford jazzberry mahogany manatee jasmine bean unmellow indigo navy limerick windsor star tennÃ© tuscan opera ochre mustard desert wenge ube caput flamingo grullo bluebonnet rajah crimson purple command dim sparkle laser carmine green taupe giants bright sand chest seashell bonbon midnight smith champagne Ãšbe sage iris gamboge spicy mountbatten me brown rosy kenyan kombu shimmering watermelon alabama cinnabar ice rust smoke liseran snow cobalt powder fandango cadet slate superiority purpureus dodger bazaar sepia boysenberry auburn platinum azure bud robin bistre peridot dune languid white hot carnation lincoln feldgrau go poppy pomp haze ube mist catawba lawn powder eminence napier bronze cg gray-blue waterspout brown-nose mordant regalia malachite racing mindaro pink international lake old desire yonder floral wine jade veronica rifle brick imperial msu blue cyan-blue rose moss olivine moonstone pastel honolulu timberwolf yellow blue-gray copper raw aquamarine grizzly moccasin curry lumber paradise blue-magenta rose hunter navajo sapphire violet-red apple puff amaranth klein zomp urobilin flirt tufts shimmer may lemon venetian pictorial brilliant boat seaweed melon noir honeydew british columbia sea smoky university persian japanese cool mix super turquoise maroon mantis bistre italian azure byzantium american salmon zaffre vista royal saffron asparagus pink-orange peach-yellow gray red icterine avocado glacier yellow-green maroon bondi mango resolution titanium han quartz apricot tumbleweed buff safety eucalyptus russian slate straw carrot spring lust pearly mist red cotta anti-flash chrome shampoo dirt pumpkin sinopia harvard shamrock patriarch illuminating glaucous cerise pistachio saffron disco charm alloy white jonquil scarlet ku cobalt twilight fuzzy magenta-pink classic feldspar mortuum plum rain neon cadmium jungle fuchsia cherry smitten orchid turkish peru shocking liberty roast burgundy lenurple very citrine de ua coffee cotton eton baker-miller arsenic fawn castleton teal outrageous rich drab acid car dogwood umber cosmic stormcloud peach dust lavender bus prussian umber mania red-orange cerulean gray-asparagus sky canary indigo english flattery beige black brink atomic state princeton electric ball vanilla blue-gray sky ultra eggshell cyan aureolin mikado non-photo ebony generic pakistan purple harlequin lion brass cameo koamaru pale pizzazz licorice beaver mardi bean cal keppel sea terra pink khaki cyan falu toolbox blush electric pine inchworm magic grayish raspberry tangelo flax spiro tiffany camouflage burnt upsdell sangria razzmic beau yale olive brass pullman coconut kobe orchid banana blue-green puce needed] catalina alice storm willpower grey utah celeste tuscany byzantium rocket veronese emerald dark tulip corn burlywood folly ultramarine blue-violet lime france isabelline medium brown-tangelo rufous gras viridian harvest cyber carrot laurel vale satin android claret blond candy fulvous earth blossom orioles dye lime amazon ruby lilac sapphire green-yellow boy linen razzmatazz wine bronze african forest antique psychedelic guppie chartreuse paolo ferrari ruby frost topaz jordy unbleached sonic camel indian barbie sunset light boston violet chestnut seal kobi midnight ghost tea naples cinnamon[citation heart cinereous sherbet olive wuzzy bisque salmon mughal redwood eerie french ivory meadow tyrian big poly islamic majorelle phlox amber fashion diamond tan grain ruber chamoisee army denim school up mauvelous ceil artichoke dutch glitter scarlet deep independence cornell coquelicot taupe ecru terra prune yellow brunswick fresh warm force green-blue sienna dartmouth chestnut iceberg flame new crimson stil space glace bulgarian rosewood grussrel salle fluorescent tangerine alizarin egyptian bittersweet carmine red-purple caribbean";
		
		switch($ipsumtype){
			case "GeographyIpsum":
				echo(randomizeArray($GeographyIpsum, $numberofwords));
			break;
			
			case "MathIpsum":
				echo(randomizeArray($MathIpsum, $numberofwords));
			break;
			
			case "CheeseIpsum":
				echo(randomizeArray($CheeseIpsum, $numberofwords));
			break;
			
			case "MedicalIpsum":
				echo(randomizeArray($MedicalIpsum, $numberofwords));
			break;
			
			case "PsychologicalIpsum":
				echo(randomizeArray($PsychologicalIpsum, $numberofwords));
			break;
			
			case "AnimalIpsum":
				echo(randomizeArray($AnimalIpsum, $numberofwords));
			break;
			
			case "ColorIpsum":
				echo(randomizeArray($ColorIpsum, $numberofwords));
			break;
			
			case "LoremIpsum":
			default:
			echo(randomizeArray($LoremIpsum, $numberofwords));	
			break;
		}
	}
?>