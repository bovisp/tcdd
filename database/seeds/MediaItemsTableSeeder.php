<?php

use Illuminate\Database\Seeder;

class MediaItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media_items')->insert([
          [
            'name' => 'Max LaRochelle',
            'filename' => 'max-larochelle-uu-Jw5SunYI-unsplash.jpg',
            'description' => 'Lightning strike at night',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Kenrick Mills',
            'filename' => 'kenrick-mills-1h2Pg97SXfA-unsplash.jpg',
            'description' => 'Calm sky during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Tom Barrett',
            'filename' => 'tom-barrett-hgGplX3PFBg-unsplash.jpg',
            'description' => 'Clouds during golden hour',
            'type_id' => 'photo'
          ],
          [
            'name' => 'NASA',
            'filename' => 'nasa-i9w4Uy1pU-s-unsplash.jpg',
            'description' => 'Typhoon',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Daniel Ramirez',
            'filename' => 'daniel-ramirez-q4TfWtnz_xw-unsplash.jpg',
            'description' => 'Moon view from clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Craig Whitehead',
            'filename' => 'craig-whitehead-SuJp8ZpkubI-unsplash.jpg',
            'description' => 'Moon view from clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Jonathan Bowers',
            'filename' => 'jonathan-bowers-BqKdvJ8a5TI-unsplash.jpg',
            'description' => 'Brown grass fields towards trees',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Johannes Plenio',
            'filename' => 'johannes-plenio-600dw3-1rv4-unsplash.jpg',
            'description' => 'Lightning thunder at daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Osman Rana',
            'filename' => 'osman-rana-HOtPD7Z_74s-unsplash.jpg',
            'description' => 'Yellow and black bus on asphalt road between buildings during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Sara the Freak',
            'filename' => 'sara-the-freak-A4UojtraSrw-unsplash.jpg',
            'description' => 'Body of water during golden hour',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Daoudi Aissa',
            'filename' => 'daoudi-aissa-Pe1Ol9oLc4o-unsplash.jpg',
            'description' => 'Cumulus clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Wim van t\'einde',
            'filename' => 'wim-van-t-einde-uj7eb7CgqRk-unsplash.jpg',
            'description' => 'Assorted color umbrella lot under white clouds at daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Fabio Neo Amato',
            'filename' => 'fabio-neo-amato-DnqV4VW-kkA-unsplash.jpg',
            'description' => 'Shallow focus photography of black umberellas',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Vidar Nordli Mathisen',
            'filename' => 'vidar-nordli-mathisen-Vl5Awbq9jx0-unsplash.jpg',
            'description' => 'Shelf cloud',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Elio Santos',
            'filename' => 'elio-santos-B6hw9ooyldM-unsplash.jpg',
            'description' => 'Brown islet and body of water',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Jan Kopriva Yo',
            'filename' => 'jan-kopriva-yo_o2jeDmwg-unsplash.jpg',
            'description' => 'Gloomy sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Andea Ferrario',
            'filename' => 'andea-ferrario-QZIaFR0jQZc-unsplash.jpg',
            'description' => 'Pink and white cumulus cloud',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Frederic Perez',
            'filename' => 'frederic-perez-bLY3k1gonWE-unsplash.jpg',
            'description' => 'Green bush during rainy day',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Panjinda',
            'filename' => 'panjinda-iIqiI5fyZKs-unsplash.jpg',
            'description' => 'Green field surrounded by fog',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Rowan Heuvel',
            'filename' => 'rowan-heuvel-RI_frMXeYf4-unsplash.jpg',
            'description' => 'Orange flowers with stand',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Suyab Ahmed',
            'filename' => 'suyab-ahmed-k8mRBejsTys-unsplash.jpg',
            'description' => 'City buildings view',
            'type_id' => 'photo'
          ],
          [
            'name' => 'David Adamson',
            'filename' => 'david-adamson-SDaLH2G6kVM-unsplash.jpg',
            'description' => 'Greyscale photo of house under cloudy sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Sam Truong Dan',
            'filename' => 'sam-truong-dan-78wDBw9ajUk-unsplash.jpg',
            'description' => 'Nimbus clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Quinn Bidmead',
            'filename' => 'quinn-bidmead-OHGJO8zg_ZY-unsplash.jpg',
            'description' => 'Grey clouds during golden hour',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Ibu Photographer',
            'filename' => 'ibu-photographer-nQFOr2WJDXY-unsplash.jpg',
            'description' => 'Silhouette photography of mountain',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Amit Rao',
            'filename' => 'amit-rao-g7G8pP9g1pc-unsplash.jpg',
            'description' => 'Silhouette of fence',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Sharad Bhat',
            'filename' => 'sharad-bhat-_Z0JGI6FGlA-unsplash.jpg',
            'description' => 'Cumulus clouds at sunset',
            'type_id' => 'photo'
          ],
          [
            'name' => 'noaa',
            'filename' => 'noaa-SLDSYepv0n8-unsplash.jpg',
            'description' => 'Wind blown cloud tops in the setting sun',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Peinge Nakale',
            'filename' => 'peinge-nakale-ie0YbSKO0fw-unsplash.jpg',
            'description' => 'Trees with clouds in the background',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Lanah Nel',
            'filename' => 'lanah-nel-e0P5fkUTRFg-unsplash.jpg',
            'description' => 'Clouds reflected in a calm lake',
            'type_id' => 'photo'
          ],
          [
            'name' => 'John Westrock',
            'filename' => 'john-westrock-HT_tLT8mGLA-unsplash.jpg',
            'description' => 'White clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Eberhard Grossgasteiger',
            'filename' => 'eberhard-grossgasteiger-ss83t9cWZd0-unsplash.jpg',
            'description' => 'Mountains masked by stratus',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Tomas Robertson',
            'filename' => 'tomas-robertson-cKB0ZvUiM6I-unsplash.jpg',
            'description' => 'Silhuette of a mountain',
            'type_id' => 'photo'
          ],
          [
            'name' => 'K8 U',
            'filename' => 'k8-U_-k14mZYOM-unsplash.jpg',
            'description' => 'Trees in forest',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Yousef Espanioly',
            'filename' => 'yousef-espanioly-kRGEvMBMoCY-unsplash.jpg',
            'description' => 'Gray clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Lee Luis',
            'filename' => 'lee-luis-RixHj-Q6CaY-unsplash.jpg',
            'description' => 'Woman walking on road near trees during day',
            'type_id' => 'photo'
          ],
          [
            'name' => 'JD Rincs',
            'filename' => 'jd-rincs-idcb1vg3DYc-unsplash.jpg',
            'description' => 'Cloudy sky during nightime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Jakob Cotton',
            'filename' => 'jakob-cotton-e_vBg7kNjzE-unsplash.jpg',
            'description' => 'Greyscale photography of body of water',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Peinge Nakale',
            'filename' => 'peinge-nakale-yic2OFh8O1c-unsplash.jpg',
            'description' => 'Clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Ben Klea',
            'filename' => 'ben-klea-4tlxn-a_CeI-unsplash.jpg',
            'description' => 'Shallow focus photography of mountain with fog under white clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Valery Rabchenyuk',
            'filename' => 'valery-rabchenyuk-OP1kmMw1wSQ-unsplash.jpg',
            'description' => 'Towering cumulus',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Eric Muhr',
            'filename' => 'eric-muhr-VpzbeeW-KKE-unsplash.jpg',
            'description' => 'Stratus',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Heawon Oh',
            'filename' => 'heawon-oh-cgPpntIvcAs-unsplash.jpg',
            'description' => 'Towering cumulus',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Alin Rusu',
            'filename' => 'alin-rusu-4dvdBcu9Yts-unsplash.jpg',
            'description' => 'Gray and black clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Christophe',
            'filename' => 'christophe-ZGQsHzU5Sls-unsplash.jpg',
            'description' => 'White clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Patrick Hendry',
            'filename' => 'patrick-hendry-u6Vv2tJJyKY-unsplash.jpg',
            'description' => 'Mountains beneatch stratus clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Mohnish Landge',
            'filename' => 'mohnish-landge-sRn0M5Taqkk-unsplash.jpg',
            'description' => 'White cloud formation during golden hour',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Perchek Industrie',
            'filename' => 'perchek-industrie-0qEmA2h57Pk-unsplash.jpg',
            'description' => 'Cumulus clouds at sunset',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Annie Spratt',
            'filename' => 'annie-spratt-KMzzi4Nm5cs-unsplash.jpg',
            'description' => 'Grey scale photo of plant',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Patrick Hendry',
            'filename' => 'patrick-hendry-AALUOgMMpBQ-unsplash.jpg',
            'description' => 'Greyscale photography of mountain',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Kaiyu Wu',
            'filename' => 'kaiyu-wu-Z7PM8yvC-OM-unsplash.jpg',
            'description' => 'Grey and white clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Victor Rodriguez',
            'filename' => 'victor-rodriguez-CPFYZSvAzc8-unsplash.jpg',
            'description' => 'Clouds during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'James Beheshti',
            'filename' => 'james-beheshti-HRSCeUavNR4-unsplash.jpg',
            'description' => 'Brown clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Peinge Nakale',
            'filename' => 'peinge-nakale-NQV_AOXZSxc-unsplash.jpg',
            'description' => 'White and grey clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Hasnan Monir',
            'filename' => 'hasnan-monir-2BvxXabdoWM-unsplash.jpg',
            'description' => 'Archetectural photography of city houses',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Yousef Espanioly',
            'filename' => 'yousef-espanioly-bdV1Vb5GY-Q-unsplash.jpg',
            'description' => 'Nimbus clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Jacob Hoferlin',
            'filename' => 'jacob-hoferlin-KcVAOQW5xOA-unsplash.jpg',
            'description' => 'Brown fields under sky during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Hulki Okan Tabak',
            'filename' => 'hulki-okan-tabak-vnf4zZaLmkI-unsplash.jpg',
            'description' => 'White boats',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Eternal Seconds',
            'filename' => 'eternal-seconds-JUogJWbBrCM-unsplash.jpg',
            'description' => 'Thick white clouds photo',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Boris Slogar',
            'filename' => 'boris-slogar-5Horykq_gyM-unsplash.jpg',
            'description' => 'Foggy mountain',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Cristian Lozan',
            'filename' => 'cristian-lozan-bNq1DzkkQyc-unsplash.jpg',
            'description' => 'White clouds during golden hour',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Hedi Benyounes',
            'filename' => 'hedi-benyounes-_3EpqfT06ng-unsplash.jpg',
            'description' => 'Gloomy clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Chris Kew',
            'filename' => 'chris-kew-bCkZCoxorQE-unsplash.jpg',
            'description' => 'Greyscale photography of trees and raodway',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Thewayofcolor',
            'filename' => 'thewayofcolor-msGwPaBdyO0-unsplash.jpg',
            'description' => 'Greyscale photo of cloud',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Nischal Masand',
            'filename' => 'nischal-masand-NnIDWwf-iMQ-unsplash.jpg',
            'description' => 'Greyscale photogarphy of high-rise building',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Daniel Ramos',
            'filename' => 'daniel-ramos-4OfpbnDaBYk-unsplash.jpg',
            'description' => 'Dark clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Arani Mukherjee',
            'filename' => 'arani-mukherjee-P_zc7lXqXbI-unsplash.jpg',
            'description' => 'Concrete buildings during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Vicky Sim',
            'filename' => 'vicky-sim-OwEdyeqhfM4-unsplash.jpg',
            'description' => 'Green trees on island surrounded by body of water',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Chris Barbalis',
            'filename' => 'chris-barbalis-SM4oeK7PXps-unsplash.jpg',
            'description' => 'White clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Abolfazl Bahadori',
            'filename' => 'abolfazl-bahadori-FyEldCDtcJY-unsplash',
            'description' => 'Street post under gloomy clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Aude Andre Saturnio',
            'filename' => 'aude-andre-saturnio-5Sv7JAFyFwQ-unsplash.jpg',
            'description' => 'Arial photography of houses',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Taylor Smith',
            'filename' => 'taylor-smith-TawjNbs35C0-unsplash.jpg',
            'description' => 'White and black clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Eric Cook',
            'filename' => 'eric-cook-gyHEQ6_dvPw-unsplash.jpg',
            'description' => 'Houses and green trees under blue cloudy sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Federico Bottos',
            'filename' => 'federico-bottos-0s4gvhTF9rE-unsplash.jpg',
            'description' => 'Landscape photo of mountains',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Patrick Tomasso',
            'filename' => 'patrick-tomasso-biRNA1Nb9OM-unsplash.jpg',
            'description' => 'High-rise buildings under cloudy sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Adrian Korpal',
            'filename' => 'adrian-korpal-NH4jbzqM0sI-unsplash.jpg',
            'description' => 'White clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Dave Francis',
            'filename' => 'dave-francis-jHxnRpuQ4pI-unsplash.jpg',
            'description' => 'Grass field',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Raphael Rychetsky',
            'filename' => 'raphael-rychetsky-HUrjV_UKBHg-unsplash.jpg',
            'description' => 'Ariel view photography of village covered with fog',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Elias Vicario',
            'filename' => 'elias-vicario-8mkzC5-jYbE-unsplash.jpg',
            'description' => 'White clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Quinn Bidmead',
            'filename' => 'quinn-bidmead-nsx2VHZxCv4-unsplash.jpg',
            'description' => 'Clouds during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Ryan Pearson',
            'filename' => 'ryan-pearson-1H_xCeqbb_o-unsplash.jpg',
            'description' => 'Bushes with fog in background',
            'type_id' => 'photo'
          ],
          [
            'name' => 'David Anderson',
            'filename' => 'david-anderson-81q5zaRFg4I-unsplash.jpg',
            'description' => 'Red and grey clouds over the city',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Vamsi Konduri',
            'filename' => 'vamsi-konduri-r78KHuwguR0-unsplash.jpg',
            'description' => 'Greyscale photography of mountain range',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Ryan Kwok',
            'filename' => 'ryan-kwok-fq-VL0CcAKc-unsplash.jpg',
            'description' => 'White clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Viktor Forgacs',
            'filename' => 'viktor-forgacs-WKW0vmhWKYg-unsplash.jpg',
            'description' => 'Building under black cloud',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Praga Praga',
            'filename' => 'praga-praga-D-BdOqG4Rqw-unsplash.jpg',
            'description' => 'Brown building under cloudy sky during daytime',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Dmitry Lebedinsky',
            'filename' => 'dmitry-lebedinsky-3ec-Rc2fFOU-unsplash.jpg',
            'description' => 'Shallow focus photo of green trees',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Henrieke Fischer',
            'filename' => 'henrieke-fischer-GCdigLv0h_U-unsplash.jpg',
            'description' => 'Grey cloudy sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Cristian Lozan',
            'filename' => 'cristian-lozan-RFWap8jsOho-unsplash.jpg',
            'description' => 'Grey cumulus clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Boris Baldinger',
            'filename' => 'boris-baldinger-1PQYdjt7oxk-unsplash.jpg',
            'description' => 'Green trees on mountain',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Dhagna',
            'filename' => 'dhagna-DZ975EkUJH0-unsplash.jpg',
            'description' => 'Clear blue sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Marina Mazur',
            'filename' => 'marina-mazur-LZlU_DeNsZg-unsplash.jpg',
            'description' => 'Field full of fog',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Chuttersnap',
            'filename' => 'chuttersnap-uITTH5X2etQ-unsplash.jpg',
            'description' => 'Trees and high rise buildings',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Scott Rodgerson',
            'filename' => 'scott-rodgerson-T7IDL74Q7C8-unsplash.jpg',
            'description' => 'Grey and white clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Andrea Rosina',
            'filename' => 'andrea-rosina-99VNbVyuYPQ-unsplash.jpg',
            'description' => 'Greyscale photography of mountains with clouds',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Darius Cotoi',
            'filename' => 'darius-cotoi-BN9l4uNJzCw-unsplash.jpg',
            'description' => 'White clouds and blue sky',
            'type_id' => 'photo'
          ],
          [
            'name' => 'Sashank Saye',
            'filename' => 'sashank-saye-cl_GCksHAow-unsplash.jpg',
            'description' => 'Grey rain clouds looming over the lighthouse at the harbour',
            'type_id' => 'photo'
          ]
        ]);
    }
}
