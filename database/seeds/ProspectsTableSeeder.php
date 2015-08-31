<?php

use Illuminate\Database\Seeder;

class ProspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Prospect::truncate();
        App\Prospect::create([
            'company_name' => 'Ultra Watech Systems',
            'address' => 'No. 40, Reddypalayam Road, Mugappair Industrial Estate, Mugappair West, Chennai - 600037',
            'phone_number' => '044 4355 1168',
            'company_email' => '',
            'company_contact_person' => 'Mr. Karikalan Uthrapathy',
            'company_website' => 'http://www.rowatertreatment.com/',
            'company_contact_person_designation' => 'Proprietor',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Casa Grande',
            'address' => 'NPL Devi,New No.111, Old No.59,LB Road,Thiruvanmiyur,Chennai – 600 041',
            'phone_number' => '044–32012721/22/23/24/25',
            'company_email' => '',
            'company_contact_person' => '',
            'company_website' => 'http://www.casagrande.in/',
            'company_contact_person_designation' => 'Vice President',
            'user_id' => '4','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Ionics Environmental Solutions',
            'address' => 'No 2 4th Floor, 3rd Cross Street V P Colony, Ayanavaram, Chennai 600023',
            'phone_number' => '04426744500,9940477548',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'RRR Enviro Systems',
            'address' => 'No 7, second floor, 11th Cross St, Dhandeeswaram Nagar, Velachery, Chennai, Tamil Nadu 600042',
            'phone_number' => '09710035249',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Royal Aqua Technologies',
            'address' => 'No. 162, Arcot Road, Opposite To Municipality, Office,, Valasaravakkam, Chennai, Tamil Nadu 600087',
            'phone_number' => '098403 72688',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'G.D TECHNOLOGY',
            'address' => 'No 256,raguman street,golden george nagar, Nerkundram, Chennai, Tamil Nadu 600107',
            'phone_number' => '090031 1534',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Aqua Revolutions Chennai',
            'address' => 'Annai Sathya St, Jafferkhanpet, Chennai, Tamil Nadu 600083',
            'phone_number' => '097909 50540',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Sigma Technologies',
            'address' => 'No. 15, Venugopal Nagar, Main Road, Thirumullaivoyil, Chennai, Tamil Nadu 600062',
            'phone_number' => '099437 89314',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Pacific Enviro Water Solutions',
            'address' => 'No.15/4, 5th Main Road, Gangai nagar, Near Murugan Kalpan Manpadam, Velachery, Chennai, Tamil Nadu 600142',
            'phone_number' => '044 2259 3102',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Good Care Enviro System Pvt Ltd',
            'address' => 'No. 16, 12th Street, Lakshmi Nagar, Moulivakkam, Porur, Chennai, Tamil Nadu 600116',
            'phone_number' => '091769 91282',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'

        ]);
        App\Prospect::create([
            'company_name' => 'Pristine Aqua Tech Private Limited',
            'address' => '53, Annaji Rao Nagar, Vembuliamman Koil, St. K. K. Nagar West, Chennai, Tamil Nadu 600078',
            'phone_number' => '044 2364 0284',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Grg Enviro Sound Solutions Private Limited',
            'address' => '61, Vishnulaya, 4th Street, Padmanabha Nagar, Near Adayar Signal, Adayar, Adayar, Chennai, Tamil Nadu 600020',
            'phone_number' => '044 4218 7111',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Thaha water solutions',
            'address' => 'Kodungaiyur West, Chennai, Tamil Nadu 600118',
            'phone_number' => '044 6450 6500',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
        'company_name' => 'Chola Aqua Technologies & Services',
        'address' => 'New No. 34, Old No. 216/2, 2nd Floor, Near Mandaveli Post Office, Chennai, Tamil Nadu 600028',
        'phone_number' => '044 2461 0789',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '3','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'Bio engineering Solutions',
        'address' => '1st Ave, Mogappair West, Ambattur Industrial Estate, Chennai, Tamil Nadu 600037',
        'phone_number' => '044 4555 0339',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '2','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'MORF INDIA',
        'address' => '33, Ramanjunam Street, near Tirumala Tirupati Devasthanam, T Nagar, Chennai, Tamil Nadu 600017',
        'phone_number' => '044 4545 6666',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '2','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'Wabag House',
        'address' => 'No.17, 200 Feet Radio Road, Thoraipakkam, Near Velachery Kamakshi Hospital, Pallavaram Main Road, Sunnambu Kolathur, Chennai, Tamil Nadu 600117',
        'phone_number' => '044 3923 2323',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '3','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'Water & Chemical Technologies',
        'address' => 'W-97, 2nd & 3rd Floors,3rd Main Road,Annanagar,Chennai - 600 040',
        'phone_number' => '044 30526770',
        'company_email' => 'wct@airtelmail.in,info@wctindia.in,enterprises@wctindia.in,vrrao@wctindia.in',
        'company_website' => 'www.wctindia.in',
        'company_contact_person' => '',
        'user_id' => '2','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'Geo Enviro Solution',
        'address' => 'No: 19/T118, Appar Street, Thiru Nagar, Jafferkhanpet, Chennai, Tamil Nadu 600078',
        'phone_number' => '087544 70969',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '3','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'Krishnaja Engineering',
        'address' => 'New No.5, Old No.3, Dhandapani Street, Chennai, Tamil Nadu 600017',
        'phone_number' => '044 2434 1917',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '2','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'The Blue Engineering',
        'address' => '53A, Perumal Koil Street, Kalpalaiyam, Chennai, Tamil Nadu 600099',
        'phone_number' => '044 6555 5456',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '3','region' => 'chennai'
    ]);
        App\Prospect::create([
        'company_name' => 'Clear Aqua Technologies Private Limited',
        'address' => 'No. 6, Srinivasa Nagar 2nd Street, T. V. Koil, Tiruchirappalli, Tamil Nadu 620005',
        'phone_number' => '',
        'company_email' => '',
        'company_contact_person' => '',
        'user_id' => '3','region' => 'chennai'
    ]);
        App\Prospect::create([
            'company_name' => 'Global Care Enviro System',
            'address' => '18, Pillayar Koil St, Ayappakkam, Chennai, Tamil Nadu 600077',
            'phone_number' => '094441 29817',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'VNS ENVIRO BIOTECHQ PVT LTD',
            'address' => 'Plot No. 69-B, Subiksha Flats, Daniel Street,, Puzhuthivakkam, Chennai, Tamil Nadu 600091',
            'phone_number' => '',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Ambika Projects India Private Limited',
            'address' => '1167, Tvs Colony, Anna Nagar West Extension, Anna Nagar West, Chennai, Tamil Nadu 600101',
            'phone_number' => '044 2652 2660',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Alpha Water Technologies',
            'address' => '40, Kalyani Industrial Estate, Ambattur Industrial Estate, Ambattur Industrial Estate, Chennai, Tamil Nadu 600058',
            'phone_number' => '044 2625 8653',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Sartime Horological Pvt Ltd',
            'address' => 'No. 59, Electrical Electronics Industrial Estate, Perungudi, Chennai, Tamil Nadu 600096',
            'phone_number' => '044 2496 1175',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'En Tech Consultants',
            'address' => 'FLAT NO. 5, MURALI ANAND FLAT, NEW NO. 9A & 10, EAST STREET, R.R. COLONY, ASHOK NAGAR, Chennai - 600083, Tamil Nadu, India',
            'phone_number' => '',
            'company_email' => '',
            'company_contact_person' => 'Mr. Narayanan K',
            'company_contact_person_designation' => 'Proprietor',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'SWARAJ EQUIPMENTS PVT LTD',
            'address' => 'No. 53 ANNAJI RAO NAGAR,VEMBULIAMMAN KOIL STREET,K.K. NAGAR (WEST)CHENNAI-600 078',
            'phone_number' => '044-23643212,044-23640284',
            'company_email' => 'swarajequipment@gmail.com',
            'company_contact_person' => '',
            'company_website' => 'www.swarajequipment.com',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Hatco Systems',
            'address' => 'New No 23, Old 105, Ashoka nagar, Arumbakkam, Chennai, Tamil Nadu 600106',
            'phone_number' => '044 2626 3450',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Quality Water Management Systems',
            'address' => 'Sector 10, Ashok Nagar, Chennai, Tamil Nadu 600083',
            'phone_number' => '044 2371 0554',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Canadian Clear',
            'address' => 'No.149, Poonamallee High Road, (E.V.R Lane) Kilpauk, Chennai-600 010, India.',
            'phone_number' => '+91-44-28362461 - 71',
            'company_email' => 'export@canadianclear.com',
            'company_website' => 'http://www.canadianclear.com/',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Tech Sharp Enviro Systems Private Limited',
            'address' => 'C-39, Second Avenue, Anna Nagar, Anna Nagar, Chennai, Tamil Nadu 600040',
            'phone_number' => '044 2621 2760',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'EcoCare Engineering Pvt. Ltd','address' => 'Plot No : 2, Door No : 11, 8th Street,Jai Nagar, Arumbakkam, Chennai - 600 106',
            'phone_number' => '044 - 23638375 / 23635886',
            'company_email' => '',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Ion Exchange',
            'address' => 'Ion House, 42, B.N.Reddy Road, Chennai 600 017, India',
            'phone_number' => '(91)44 3989 0909/3910 2900',
            'company_email' => 'checro@ionexchange.co.in',
            'company_website' => 'http://www.ionexchange.co.in/',
            'company_contact_person' => '',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'ABC TECHNO LABS',
            'address' => 'No.2, 2nd Street, Thangam Colony,Anna Nagar West, Chennai – 600 040',
            'phone_number' => '+91-44-2616 1123 / 24 / 25',
            'company_email' => 'abc@abctechnolab.com',
            'company_website' => 'http://www.abctechnolab.com/',
            'company_contact_person' => '',
            'user_id' => '3','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'Eco-Chem Laboratories Private Limited',
            'address' => 'Old No. 92 B, New No. 18, Periyar Pathai,Near Thirunagar Bus Stop, Caldwell Colony, Choolaimedu, Chennai - 600094',
            'phone_number' => '+(91)-7867012690/681',
            'company_email' => '',
            'company_contact_person' => 'Ganesh Natarajan',
            'company_contact_person_designation' => 'Managing Director',
            'company_website' => 'http://www.water-treatmentplant.co.in/',
            'user_id' => '2','region' => 'chennai'
        ]);
        App\Prospect::create([
            'company_name' => 'ZION ENVIRO SYSTEMS PVT LTD',
            'address' => 'MEHTA VILLA, NO.72, BALAJI NAGAR, PADIKUPPAM ROAD, ANNA NAGAR, CHENNAI - 600 040',
            'phone_number' => '044 - 4330 8333,99400 32914/10',
            'company_email' => 'sales@zionenviro.com,enquiry@zionenviro.com',
            'company_contact_person' => '',
            'company_website' => 'www.zionenviro.com',
            'user_id' => '3','region' => 'chennai'
        ]);

    }
}
