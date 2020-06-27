var quotes = [
    "Seals are part of the pinniped order of marine mammals, which also includes sea lions, walruses and fur seals. There are 33 species of pinnipeds in the world and all are believed to have evolved from once terrestrial otter-like creatures.",
    "Seals prefer cold sea waters and are primarily found in the Arctic and Antarctic regions.",
    "In the wild, seals can live for up to 30 years with females boasting a higher life expectancy than males.",
    "Some seal species, like the Leopard Seal, feed off fellow seals! Most, however, feed off crustaceans, fish and seabirds (if they can catch them).",
    "The Crabeater Seal, which can be spotted on an Antarctic cruise, boasts the largest population of all the seal species. Estimates put their numbers at between 2 and 75 million. individuals, worldwide. As cute and friendly as they may look, seals can actually be fervently territorial and quite aggressive.",
    "Seals can sleep underwater and usually only come on land to escape predators like whales and sharks, as well as to mate, give birth, feed and moult.",
    "Some seals can dive up to 900m in depth and some can hold their breath underwater for up to 2 hours!",
    "A seal mum’s milk can be up to 50% fat, and pups can put on 2kgs a DAY. That should make you feel a little better about your Christmas and New Year calorific splurge!",
    "Seals have been hunted throughout history, with their fat and fur being highly coveted. Although a great majority of species are not endangered – the Galapagos Fur Seal is one of the exceptions – seals are still a highly protected mammal in most parts of the world. Ove the last century, various species have gone extinct, including the Caribbean Monk Seal and Japanese Sea Lion.",
    "id you know Weddell seals say mibph mibph egg geeagh AAAAAAAAAAAAAA mibph.",
    "The Saimaa Ringed Seal is believed to be as intelligent as a dog.",
    "The Saimaa ringed seals have a short tail between its hind flippers.",
    "Each Saimaa ringed seal has an individual fur pattern, by which it can be identified just like a person can be identified by their fingerprints.", 
    "Between February and March each year, harp seal pups are born in the Northern hemisphere. Harp seal mothers nurse their pups for about 12 days before abandoning them. Surrounded by nothing but the harsh cold, the helpless harp seal pups must figure out how to survive in the cold world they live in.", 
    "Harp seal pups can go without food for up to 6 weeks until they learn how to hunt for food.",
    "Harp seals consume snow to keep themselves hydrated.",
    "Harp seals do not have tear ducts, which is why they always appear to be crying.",
    'The name "Harp seal" comes from the large harp-shaped ring on the seals back.',
    "Mother Harp seals can identify their own young in the thousands of a colony by their scent.",
    "In one breath, a harbour seal can exchange 90% of the air in its lungs. Humans can only change 20% of our air per breath.",
    "Ringed seals have the highest population of seal species in the world.",
    "Ringed seals have claws more than 2.5 centimetres thick that they use to claw out breathing holes in the ice sheets. They have been known to dig these holes through ice as thick 2 metres. Polar bears most often find them at these holes.",
    "Ringed seals swim about 10 km per hour on average, but can burst to speeds of up to almost 30 km per hour.",
    "Ringed seals live about 25 to 30 years in the wild.",
    "Mediterranean Monk seals are the most endangered true seal species.",
    "Caspian seals are the smallest true seal species, with the maximum height being 3 feet.",
    "The unique sieve-like teeth of the Crabeater seal are considered to be the most specialised of any carnivore.",
    "If Crabeater seals feel threatened, they will snort, hiss, show their teeth and roll over multiple times. This probably a getaway tactic evolved to help evade Killer whales and Leopard seals.",
    'Despite its name, Crabeater seals dont eat crabs.',
    "A seal's whiskers help it to detect prey in dark murky waters.", 
    "The pinnipeds group contains 3 families: 'phocidae, the earless or true seal (e.g. harp seal), otaridae, the eared seals (e.g. fur seals) and odobenidae, which are walruses.",
    "There are around 33 seal species.",
    "Seal &#39 s; have a layer of fat under their skin called blubber, which keeps them warm in cold water. Their slick fur coat is streamlined for gliding through water."
]

function newQuote(){
    var randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
}