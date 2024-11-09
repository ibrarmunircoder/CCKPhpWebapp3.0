-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2024 at 11:21 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u987256365_enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `first_sub_content` varchar(256) NOT NULL,
  `second_sub_content` varchar(256) NOT NULL,
  `third_sub_content` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `first_sub_content`, `second_sub_content`, `third_sub_content`, `image`, `description`) VALUES
(1, 'About CCK Enterprices', ' Take a look at our round up of the best shows', 'It has survived not only five centuries', 'Lorem Ipsum has been the ndustry standard dummy text', '1.jpg', '<p>CCK Enterprise welcomes you all to a greener future where we provide the needed help for businesses to achieve their charging goals. With time it has been clearly understood that for mass EV adoption charging stations are critical. Well, there are a lot of issues with EV charging stations. After a business decides to install an EV charging facility, it needs to purchase units for charging, and for the installation hire a contractor. Now, you can be riddled with unsatisfactory results, inefficient design and engineering, and unnecessary costs. Additionally, an individual will be responsible for acting as a project manager and ensuring the complete process is coordinated properly. For someone who has never planned anything like EV charging stations before, this can take a lot of time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We are always up and ready to assist you in coordinating the process of EV charging installations, thus money and time you can save. Get associated with us to avoid overpaying for features and products you do not need. Additionally, save as much money as possible with the best possible rebate programs, arranged by us.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Begin your transition to electric now and get a free quote today!</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `about_consultant`
--

CREATE TABLE `about_consultant` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL,
  `content` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_consultant`
--

INSERT INTO `about_consultant` (`id`, `heading`, `sub_heading`, `content`) VALUES
(1, 'What Makes You A Right Fit For An EV Consultant?', 'Check if any of the mentioned statements resonate with you, then it’ll be our duty to guide you in switching towards electric!', 'Willing to provide the facility of EV charging to residents, customers, or employees?'),
(2, '', '', 'Reduce emissions of carbon?'),
(3, '', '', 'Want to include yourself in the future of electricity?'),
(4, '', '', 'Interested in installing an EV charging station, unsure about which one.'),
(5, '', '', 'Determined to a community-based sustainable energy program?'),
(6, '', '', 'Difficulty in understanding the technical terms and concepts of EV?'),
(7, '', '', 'Scarcity of the required time necessary to complete the installation of EV charging?'),
(8, '', '', 'Incomplete understanding of the applicable EV charging incentives?');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminid` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `password`) VALUES
(1, 'admin@demo.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner_blog`
--

CREATE TABLE `banner_blog` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_blog`
--

INSERT INTO `banner_blog` (`id`, `image1`, `image2`, `image3`) VALUES
(1, '17240500381.jpg', '17240500381.jpg', '17240500381.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_engineering`
--

CREATE TABLE `banner_engineering` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_engineering`
--

INSERT INTO `banner_engineering` (`id`, `image1`, `image2`, `image3`) VALUES
(1, '17240483191.jpg', '17240498381.jpg', '17240498381.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_installation`
--

CREATE TABLE `banner_installation` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_installation`
--

INSERT INTO `banner_installation` (`id`, `image1`, `image2`, `image3`) VALUES
(1, '17240484381.jpg', '17240494901.jpg', '17240494901.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_management`
--

CREATE TABLE `banner_management` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_management`
--

INSERT INTO `banner_management` (`id`, `image1`, `image2`, `image3`) VALUES
(1, '17240483801.jpg', '17240497371.jpg', '17240497371.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_program`
--

CREATE TABLE `banner_program` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_program`
--

INSERT INTO `banner_program` (`id`, `image1`, `image2`, `image3`) VALUES
(1, '17240481871.jpg', '17240499271.jpg', '17240499271.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_study`
--

CREATE TABLE `banner_study` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL,
  `banner_heading1` varchar(1500) NOT NULL,
  `banner_heading2` varchar(1500) NOT NULL,
  `image4` varchar(256) NOT NULL,
  `image5` varchar(256) NOT NULL,
  `logo_heading` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_study`
--

INSERT INTO `banner_study` (`id`, `image1`, `image2`, `image3`, `banner_heading1`, `banner_heading2`, `image4`, `image5`, `logo_heading`) VALUES
(1, '1724133413b1.jpg', '1724133491b2.jpg', '1724133491b3.jpg', '<h1>&nbsp;Charge Into The Future!</h1>\r\n\r\n<p>&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua.</p>\r\n', '<h1>Ev Charging Feasibility Study!</h1>\r\n\r\n<p>&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua.</p>\r\n', '17241304332(5).jpg', '17241304961(7).jpg', 'Logo Area');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `heading` varchar(1500) NOT NULL,
  `sub_heading1` longtext NOT NULL,
  `sub_heading2` longtext NOT NULL,
  `short_passage` longtext NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category`, `image`, `heading`, `sub_heading1`, `sub_heading2`, `short_passage`, `created_at`) VALUES
(1, 'EV Charging Feasibility Study', '17241340671(6).jpg', 'Consectetur adipisicing elit sed do eiusmod tempor incididunt...', '<h3>3 Types of DCFC Site Architecture</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Designing and engineering electric vehicle (EV) charging stations involves a complex set of tasks, with various manufacturers and system components needed to ensure safe and efficient charging. For Direct Current Fast Charging (DCFC) stations, engineers have several site design options based on desired charging performance, budget, and power availability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>There are three primary types of DCFC site architectures: all-in-one, split system, and battery-integrated. Each architecture has distinct advantages and disadvantages related to equipment costs, charging efficiency, and installation complexity.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This article explores the differences between these three DCFC site architectures and identifies the scenarios where each is most suitable.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>All-In-One</h3>\r\n\r\n<p>An all-in-one DCFC, as the name suggests, integrates the power modules within the same unit as the charging dispenser. This design is highly space-efficient, as it eliminates the need for separate power cabinets and rectifiers, which step up grid power and convert Alternating Current (AC) to Direct Current (DC). Additionally, all-in-one units are generally less expensive than other DCFC types.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>However, the power output of an all-in-one DCFC is typically limited, usually ranging from 25-240 kW, depending on the manufacturer. Another drawback is the inability to share power across multiple units, limiting load management and site power optimization.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Popular all-in-one DCFC models include the ABB Terra series, Tritium PKM150, and Autel MaxiCharger DC Fast. Prices start at approximately $50,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><cite>Advantages:</cite></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Lower cost</li>\r\n	<li>Compact station footprint</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Limited power output</p>\r\n	</li>\r\n	<li>\r\n	<p>Inefficient power usage</p>\r\n	</li>\r\n	<li>\r\n	<p>Reduced vehicle throughput</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><em><strong>Ideal Locations:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Grocery stores</p>\r\n	</li>\r\n	<li>\r\n	<p>Medium-duty fleet depots</p>\r\n	</li>\r\n	<li>\r\n	<p>Urban parking garages</p>\r\n	</li>\r\n	<li>\r\n	<p>Split System</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Unlike all-in-one DCFCs, split system designs, also known as distributed systems, feature separate power cabinets and charging dispensers. While this configuration requires more space and is more expensive, it&rsquo;s ideal for sites that demand high charging performance and efficient power distribution across multiple dispensers through load management. Typically, one power cabinet can support up to four dispensers, modulating power to prevent overloading.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A split system DCFC offers higher power output than all-in-one systems, with power cabinets capable of delivering up to 600 kW across multiple dispensers. Some models can even link multiple power cabinets to enhance power distribution efficiency, with the potential to provide over 350 kW per dispenser&mdash;currently the highest output for light-duty EVs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Split system DCFCs are commonly used for new installations, especially at highway rest stops or commercial sites. Notable models include the Chargepoint Express Plus, BTC Gen4 Split System, and Kempower Distributed DCFC. Prices start around $80,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Advantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>High power output</li>\r\n	<li>Increased vehicle throughput</li>\r\n	<li>Efficient power usage</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Higher cost</li>\r\n	<li>Larger station footprint</li>\r\n	<li>Battery-Integrated</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The battery-integrated DCFC addresses a specific issue for site hosts: demand fees charged by electric utilities when power usage exceeds a certain threshold. These fees can be significant, especially for high-power DCFC sites.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By integrating a battery between the utility connection and the charging dispenser, site hosts can avoid these demand fees. The battery charges slowly, avoiding spikes in power usage, and then discharges to supply power to EVs during charging sessions. Another advantage is that this design can often be implemented without requiring costly electrical service upgrades, saving site hosts tens of thousands of dollars.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Although the battery can be installed separately, a battery-integrated DCFC combines it with the charging unit, enlarging the footprint slightly compared to an all-in-one DCFC but requiring less space than a split system. However, these units are the most expensive among the three types, primarily due to the large battery pack. Once the battery is fully discharged, charging performance is limited to the grid connection, typically around 30 kW. Manufacturers claim battery-integrated DCFCs can charge up to 20 EVs per day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Battery packs in these units range from 160 kWh to 466 kWh, with outputs around 200 kW. Popular models include the Freewire Boost 200 and XCharge Net Zero Series. Prices start at approximately $170,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Advantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Avoids utility demand fees</li>\r\n	<li>Compact station footprint</li>\r\n	<li>Eliminates the need for electrical service upgrades</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Most expensive option</li>\r\n	<li>Limited charging performance once the battery is depleted</li>\r\n	<li>Closing Thoughts</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Interested in installing EV chargers at your property? Contact us today, and we&#39;ll guide you through the entire project, ensuring a smooth and successful installation.</p>\r\n\r\n<p>=================</p>\r\n\r\n<p><strong>EV Charging Mandate in New California Developments: 2022 Building Code Update</strong></p>\r\n\r\n<p>As of January 1, 2023, the 2022 California Building Code mandates the inclusion of electric vehicle (EV) chargers in both residential and non-residential properties. This new requirement is part of the broader updates to Part 11 of the Green Building Standards and aligns with California&rsquo;s aggressive EV goals, which include a push for only EV sales by 2035 and significant investments in EV infrastructure. With EV adoption rates in California already at 18%&mdash;compared to just 4% nationally&mdash;the state is leading the charge in EV readiness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The updated code seeks to install EV chargers at various property types, including apartments, shopping centers, and workplaces. Before delving into the specifics of these changes, it&rsquo;s important to understand key terms related to EV infrastructure, such as Automatic Load Management Systems (ALMS), EV Ready Spaces, and Level 2 Electric Vehicle Supply Equipment (EVSE).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Key EV Definitions in the California Building Code</strong></p>\r\n\r\n<p>Automatic Load Management System (ALMS): A system that distributes electrical load across multiple EV chargers to manage power consumption effectively.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Electric Vehicle (EV): Any on-road vehicle primarily powered by an electric motor, including plug-in hybrids, but excluding off-road vehicles like golf carts.</p>\r\n\r\n<p>EV Capable Space: A parking space with the necessary electrical infrastructure to support future EV charging installations.</p>\r\n\r\n<p>EV Charger: Equipment used to charge an electric vehicle.</p>\r\n\r\n<p>EV Ready Space: A parking space with a branch circuit and necessary raceways to accommodate EV charging, terminating in a receptacle or charger.</p>\r\n\r\n<p>EV Charging Space (EV Space): A designated area intended for the future installation of EV charging equipment.</p>\r\n\r\n<p>EV Charging Station (EVCS): One or more EV spaces equipped with chargers, designed for vehicle charging.</p>\r\n\r\n<p>EV Supply Equipment (EVSE): The hardware and wiring necessary to transfer energy from the building&rsquo;s electrical system to the EV.</p>\r\n\r\n<p>Level 2 EVSE: A 208/240-volt, 40-ampere branch circuit for EV charging.</p>\r\n\r\n<p>Low Power Level 2 EV Charging Receptacle: A 208/240-volt, 20-ampere branch circuit designed for EV charging.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neighborhood Electric Vehicle (NEV): A low-speed, zero-emission vehicle.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ZEV</strong>: A vehicle certified to zero-emission standards.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EV Charging Requirements in Residential Developments</strong></p>\r\n\r\n<p>Significant changes have been made to Chapter 4 of the Residential Mandatory Measures. For large residential developments, EV chargers are now required in certain cases. For example, in multi-family or hotel projects with 20 or more units, 5% of parking spaces must include Level 2 chargers. Additionally, 10% of parking must be EV Capable, and 25% must be EV Ready, meaning they have 208/240V outlets for portable EV chargers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In total, 40% of parking spaces in large residential developments must have some form of EV charging infrastructure, a major increase from the previous requirement of 10% for EV Capable spaces. The code also introduces low-power EV charging for sites like apartments and hotels, where overnight vehicle dwell time makes this cost-effective. Low-power charging is cheaper than both Level 2 and DC Fast Charging options.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EV Charging Requirements in Non-Residential Developments</strong></p>\r\n\r\n<p>Chapter Five of the Green Building Standard details the requirements for non-residential developments. For example, properties with 10-25 parking spaces must include several EV Capable spaces. Properties with 26 or more parking spaces are required to provide both EV Capable and EV chargers. For sites with over 200 parking spaces, 20% must be EV Capable, and 25% of those must be equipped with EV chargers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The code also allows the installation of a DC Fast Charger to substitute for five AC chargers, and includes provisions for medium and heavy-duty EV infrastructure at locations like warehouses and retail centers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Exceptions and Additional Notes</strong></p>\r\n\r\n<p>Certain projects are exempt from these regulations, as determined by the Authority Having Jurisdiction (AHJ). The code also permits the use of ALMS to manage the overall electrical load from EV chargers, addressing concerns about the impact of EVs on the electrical grid.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Another key provision is that EV charging spaces now count as parking spaces in new developments, ensuring that developers don&rsquo;t lose parking capacity. However, once</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>installed, these spaces must be used exclusively for charging EVs, with penalties for non-compliance already being enforced by some jurisdictions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Unchanged Sections of the Code</strong></p>\r\n\r\n<p>Accessibility requirements for public EV charging stations remain unchanged. Single-family homes are still only required to provide EV Capable spaces, leaving homeowners to make necessary electrical modifications for home charging.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Conclusion</strong></p>\r\n\r\n<p>The 2022 California Building Code&rsquo;s EV charging requirements mark significant progress in supporting the state&rsquo;s EV adoption. By mandating chargers in new developments, more Californians will have access to the necessary infrastructure, accelerating the transition to electric vehicles. This update is particularly impactful for multi-unit developments (MUDs), ensuring that residents in new apartments or condos have convenient charging options. Over the next decade, these changes are expected to lead to thousands of new EV chargers across the state, further cementing California&rsquo;s leadership in the EV revolution.</p>\r\n\r\n<p>=======================</p>\r\n\r\n<p>The Case for Electric Cars with Less Than 200 Miles of Range</p>\r\n\r\n<p>One of the most common questions about electric vehicles (EVs) is, &quot;How far can it go?&quot; A few years ago, this was a significant concern for many potential buyers. However, thanks to advancements in technology, many EVs today can easily exceed 250 miles on a single charge, with some models reaching 300, 400, or even 500 miles.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The fear of running out of power, known as range anxiety, is gradually diminishing among EV buyers. Modern electric vehicles are well-equipped to handle daily commutes, regional travel, and even the occasional road trip. This is due in part to the growing network of fast-charging stations across the country, provided by companies like Tesla and Electrify America.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Improvements in battery technology and vehicle efficiency have led to longer ranges at lower costs. As the demand for EVs increases, investments in battery production have driven costs down even further. For instance, the 2011 Nissan Leaf, which cost $33,000 and had a range of 73 miles, now starts at $27,000 and offers 149 miles of range.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In fact, the cost of EV battery packs has dropped significantly over the years. According to Bloomberg NEF, prices have fallen from $684 per kWh in 2013 to $132 per kWh in 2021. Experts predict that these costs will continue to decline as the global shift toward electric vehicles continues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Given these advancements, is it necessary for every EV to have a range of over 200 or 300 miles? We argue that a sub-200 mile range is not only acceptable but often desirable for many households. Here&rsquo;s why:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Average Commute is Under 40 Miles</strong></p>\r\n\r\n<p>According to the U.S. Census Bureau, the average American commute is 39 miles. This means that any EV on the market today can easily cover the daily commute, even when accounting for factors like cold weather or high-speed driving. With gas prices at record highs, switching to an electric vehicle could be a smart financial move.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Multi-Vehicle Households</strong></p>\r\n\r\n<p>But what about longer trips? For those who prefer not to rely on public fast-charging networks, a gas-powered car or a long-range EV can serve as the primary vehicle for long-distance travel, while a short-range EV can handle daily commuting and in-town errands. A 2018 report by KPMG found that 52% of American households have two or more vehicles, making it easier to incorporate a sub-200 mile range EV into the mix.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Affordable EVs Lead to Greater Adoption</strong></p>\r\n\r\n<p>Shorter-range EVs are typically less expensive because they require fewer batteries, making them more affordable for consumers. As a result, more households can make the switch to electric. Studies have shown that EVs are cheaper to own over time due to lower maintenance costs and higher energy efficiency.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If we want to increase EV adoption and reduce emissions, we need to focus on producing more affordable vehicles. This is especially important as car prices continue to rise due to limited supply.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Available Sub-200 Mile Range Electric Cars</strong></p>\r\n\r\n<p>Here&rsquo;s a list of available short-range EVs and their starting prices. After applying the federal tax credit, many of these vehicles cost around $20,000, making them a budget-friendly option for many households. This is particularly appealing considering that the average new car now sells for over $45,000. Additionally, state rebates, utility incentives, and local programs can further reduce the cost.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vehicle Range Starting MSRP Cost After Federal Tax Credit</p>\r\n\r\n<p>Mazda CX-30 EV 100 $33,470 $25,970</p>\r\n\r\n<p>Mini Cooper SE 114 $29,990 $22,490</p>\r\n\r\n<p>Nissan Leaf &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 149 $27,400 $19,900</p>\r\n\r\n<p>Hyundai Ioniq Electric 170 $33,245 $25,475</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For those interested in a used EV, many older models offer less than 200 miles of range. These include vehicles like the Kia Soul EV, BMW i3, Toyota RAV4 EV, Mitsubishi i-MiEV, and Chevy Spark EV.</p>\r\n\r\n<p>============================</p>\r\n\r\n<p><strong>How to Request EV Charging at Your Workplace</strong></p>\r\n\r\n<p>Charging an electric vehicle (EV) overnight at home is the most convenient and cost-effective method. Similar to charging your phone, you wake up to a fully charged vehicle, ready for the day. Over 85% of EV drivers do this. However, the next best option is charging at your workplace, where your car is parked for long periods, making it ideal for recharging during the workday. If home charging isn&#39;t feasible for you, consider asking your employer to install EV charging stations. Here&#39;s how to approach the conversation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Assess Interest Among Colleagues</strong></p>\r\n\r\n<p>Strength in numbers is key when requesting workplace EV charging. If only a small percentage of employees are interested, the employer may not see it as a priority. However, if a significant portion, such as 20%, shows interest, the employer is more likely to consider the request. Talk to your colleagues to gauge their interest, even if they don&rsquo;t currently own an EV, as having charging stations could encourage them to make the switch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Develop a Detailed Plan</strong></p>\r\n\r\n<p>Before approaching your employer, prepare a comprehensive plan. This should include the estimated number of charging stations, potential locations, suggested vendors, contractors, and the permitting process. Anticipate the questions your employer might ask and address them in your plan. This proactive approach demonstrates your commitment and helps the employer assess the resources needed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Estimate the Costs</strong></p>\r\n\r\n<p>Your plan should include a cost estimate. Consider installation expenses, networking fees (if any), electricity costs, and potential rebates. Some companies may reduce costs by excluding networking or by passing electricity costs onto EV drivers. Having these figures ready will help you present a clear and informed proposal to your employer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Highlight the Benefits</strong></p>\r\n\r\n<p>For your proposal to succeed, both you and your employer need to benefit. You gain convenient workplace charging, while your employer can retain current employees with EVs, attract new ones, and potentially generate revenue. Additionally, workplace charging can help meet green building standards and support a company EV fleet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Identify Decision-Makers</strong></p>\r\n\r\n<p>It&rsquo;s crucial to know who the decision-makers are in your company. Ensure that your request reaches the appropriate individuals who can approve the project or are involved in the decision-making process. Maintaining close communication with these stakeholders will allow you to address concerns promptly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lead the Initiative</strong></p>\r\n\r\n<p>Be prepared to take charge of the project if your employer approves it. Your employer may be reluctant to allocate additional resources, so your willingness to lead the project could be crucial. If your current workload doesn&rsquo;t allow this, consider hiring an EV charging consultant to manage the project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Follow Through on Your Commitment</strong></p>\r\n\r\n<p>After making your request, it&rsquo;s essential to follow through. Whether providing more information or leading the project, meeting the expectations you set will build trust with your employer and increase the likelihood of a successful outcome.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Final Thoughts</strong></p>\r\n\r\n<p>Charging your EV at home or work significantly reduces the need for public charging stops, making your daily routine more convenient. Over 90% of your charging can be done at home or work. If you have further questions or need help with your workplace charging project, feel free to reach out to us. We&rsquo;re here to assist businesses in planning and installing EV charging stations and look forward to helping you with your project!</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 'the request. Talk to your colleagues to gauge their interest, even if they don’t currently own an EV, as having charging stations could encourage them to make the switch.', '0000-00-00 00:00:00'),
(2, 'EV Charging Feasibility Management', '2 (4).jpg', ' Consectetur adipisicing elit sed do eiusmod tempor incididunt...', '<h3>3 Types of DCFC Site Architecture</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Designing and engineering electric vehicle (EV) charging stations involves a complex set of tasks, with various manufacturers and system components needed to ensure safe and efficient charging. For Direct Current Fast Charging (DCFC) stations, engineers have several site design options based on desired charging performance, budget, and power availability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>There are three primary types of DCFC site architectures: all-in-one, split system, and battery-integrated. Each architecture has distinct advantages and disadvantages related to equipment costs, charging efficiency, and installation complexity.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This article explores the differences between these three DCFC site architectures and identifies the scenarios where each is most suitable.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>All-In-One</h3>\r\n\r\n<p>An all-in-one DCFC, as the name suggests, integrates the power modules within the same unit as the charging dispenser. This design is highly space-efficient, as it eliminates the need for separate power cabinets and rectifiers, which step up grid power and convert Alternating Current (AC) to Direct Current (DC). Additionally, all-in-one units are generally less expensive than other DCFC types.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>However, the power output of an all-in-one DCFC is typically limited, usually ranging from 25-240 kW, depending on the manufacturer. Another drawback is the inability to share power across multiple units, limiting load management and site power optimization.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Popular all-in-one DCFC models include the ABB Terra series, Tritium PKM150, and Autel MaxiCharger DC Fast. Prices start at approximately $50,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><cite>Advantages:</cite></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Lower cost</li>\r\n	<li>Compact station footprint</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Limited power output</p>\r\n	</li>\r\n	<li>\r\n	<p>Inefficient power usage</p>\r\n	</li>\r\n	<li>\r\n	<p>Reduced vehicle throughput</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><em><strong>Ideal Locations:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Grocery stores</p>\r\n	</li>\r\n	<li>\r\n	<p>Medium-duty fleet depots</p>\r\n	</li>\r\n	<li>\r\n	<p>Urban parking garages</p>\r\n	</li>\r\n	<li>\r\n	<p>Split System</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Unlike all-in-one DCFCs, split system designs, also known as distributed systems, feature separate power cabinets and charging dispensers. While this configuration requires more space and is more expensive, it&rsquo;s ideal for sites that demand high charging performance and efficient power distribution across multiple dispensers through load management. Typically, one power cabinet can support up to four dispensers, modulating power to prevent overloading.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A split system DCFC offers higher power output than all-in-one systems, with power cabinets capable of delivering up to 600 kW across multiple dispensers. Some models can even link multiple power cabinets to enhance power distribution efficiency, with the potential to provide over 350 kW per dispenser&mdash;currently the highest output for light-duty EVs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Split system DCFCs are commonly used for new installations, especially at highway rest stops or commercial sites. Notable models include the Chargepoint Express Plus, BTC Gen4 Split System, and Kempower Distributed DCFC. Prices start around $80,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Advantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>High power output</li>\r\n	<li>Increased vehicle throughput</li>\r\n	<li>Efficient power usage</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Higher cost</li>\r\n	<li>Larger station footprint</li>\r\n	<li>Battery-Integrated</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The battery-integrated DCFC addresses a specific issue for site hosts: demand fees charged by electric utilities when power usage exceeds a certain threshold. These fees can be significant, especially for high-power DCFC sites.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By integrating a battery between the utility connection and the charging dispenser, site hosts can avoid these demand fees. The battery charges slowly, avoiding spikes in power usage, and then discharges to supply power to EVs during charging sessions. Another advantage is that this design can often be implemented without requiring costly electrical service upgrades, saving site hosts tens of thousands of dollars.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Although the battery can be installed separately, a battery-integrated DCFC combines it with the charging unit, enlarging the footprint slightly compared to an all-in-one DCFC but requiring less space than a split system. However, these units are the most expensive among the three types, primarily due to the large battery pack. Once the battery is fully discharged, charging performance is limited to the grid connection, typically around 30 kW. Manufacturers claim battery-integrated DCFCs can charge up to 20 EVs per day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Battery packs in these units range from 160 kWh to 466 kWh, with outputs around 200 kW. Popular models include the Freewire Boost 200 and XCharge Net Zero Series. Prices start at approximately $170,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Advantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Avoids utility demand fees</li>\r\n	<li>Compact station footprint</li>\r\n	<li>Eliminates the need for electrical service upgrades</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Most expensive option</li>\r\n	<li>Limited charging performance once the battery is depleted</li>\r\n	<li>Closing Thoughts</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Interested in installing EV chargers at your property? Contact us today, and we&#39;ll guide you through the entire project, ensuring a smooth and successful installation.</p>\r\n\r\n<p>=================</p>\r\n\r\n<p><strong>EV Charging Mandate in New California Developments: 2022 Building Code Update</strong></p>\r\n\r\n<p>As of January 1, 2023, the 2022 California Building Code mandates the inclusion of electric vehicle (EV) chargers in both residential and non-residential properties. This new requirement is part of the broader updates to Part 11 of the Green Building Standards and aligns with California&rsquo;s aggressive EV goals, which include a push for only EV sales by 2035 and significant investments in EV infrastructure. With EV adoption rates in California already at 18%&mdash;compared to just 4% nationally&mdash;the state is leading the charge in EV readiness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The updated code seeks to install EV chargers at various property types, including apartments, shopping centers, and workplaces. Before delving into the specifics of these changes, it&rsquo;s important to understand key terms related to EV infrastructure, such as Automatic Load Management Systems (ALMS), EV Ready Spaces, and Level 2 Electric Vehicle Supply Equipment (EVSE).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Key EV Definitions in the California Building Code</strong></p>\r\n\r\n<p>Automatic Load Management System (ALMS): A system that distributes electrical load across multiple EV chargers to manage power consumption effectively.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Electric Vehicle (EV): Any on-road vehicle primarily powered by an electric motor, including plug-in hybrids, but excluding off-road vehicles like golf carts.</p>\r\n\r\n<p>EV Capable Space: A parking space with the necessary electrical infrastructure to support future EV charging installations.</p>\r\n\r\n<p>EV Charger: Equipment used to charge an electric vehicle.</p>\r\n\r\n<p>EV Ready Space: A parking space with a branch circuit and necessary raceways to accommodate EV charging, terminating in a receptacle or charger.</p>\r\n\r\n<p>EV Charging Space (EV Space): A designated area intended for the future installation of EV charging equipment.</p>\r\n\r\n<p>EV Charging Station (EVCS): One or more EV spaces equipped with chargers, designed for vehicle charging.</p>\r\n\r\n<p>EV Supply Equipment (EVSE): The hardware and wiring necessary to transfer energy from the building&rsquo;s electrical system to the EV.</p>\r\n\r\n<p>Level 2 EVSE: A 208/240-volt, 40-ampere branch circuit for EV charging.</p>\r\n\r\n<p>Low Power Level 2 EV Charging Receptacle: A 208/240-volt, 20-ampere branch circuit designed for EV charging.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neighborhood Electric Vehicle (NEV): A low-speed, zero-emission vehicle.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ZEV</strong>: A vehicle certified to zero-emission standards.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EV Charging Requirements in Residential Developments</strong></p>\r\n\r\n<p>Significant changes have been made to Chapter 4 of the Residential Mandatory Measures. For large residential developments, EV chargers are now required in certain cases. For example, in multi-family or hotel projects with 20 or more units, 5% of parking spaces must include Level 2 chargers. Additionally, 10% of parking must be EV Capable, and 25% must be EV Ready, meaning they have 208/240V outlets for portable EV chargers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In total, 40% of parking spaces in large residential developments must have some form of EV charging infrastructure, a major increase from the previous requirement of 10% for EV Capable spaces. The code also introduces low-power EV charging for sites like apartments and hotels, where overnight vehicle dwell time makes this cost-effective. Low-power charging is cheaper than both Level 2 and DC Fast Charging options.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EV Charging Requirements in Non-Residential Developments</strong></p>\r\n\r\n<p>Chapter Five of the Green Building Standard details the requirements for non-residential developments. For example, properties with 10-25 parking spaces must include several EV Capable spaces. Properties with 26 or more parking spaces are required to provide both EV Capable and EV chargers. For sites with over 200 parking spaces, 20% must be EV Capable, and 25% of those must be equipped with EV chargers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The code also allows the installation of a DC Fast Charger to substitute for five AC chargers, and includes provisions for medium and heavy-duty EV infrastructure at locations like warehouses and retail centers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Exceptions and Additional Notes</strong></p>\r\n\r\n<p>Certain projects are exempt from these regulations, as determined by the Authority Having Jurisdiction (AHJ). The code also permits the use of ALMS to manage the overall electrical load from EV chargers, addressing concerns about the impact of EVs on the electrical grid.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Another key provision is that EV charging spaces now count as parking spaces in new developments, ensuring that developers don&rsquo;t lose parking capacity. However, once</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>installed, these spaces must be used exclusively for charging EVs, with penalties for non-compliance already being enforced by some jurisdictions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Unchanged Sections of the Code</strong></p>\r\n\r\n<p>Accessibility requirements for public EV charging stations remain unchanged. Single-family homes are still only required to provide EV Capable spaces, leaving homeowners to make necessary electrical modifications for home charging.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Conclusion</strong></p>\r\n\r\n<p>The 2022 California Building Code&rsquo;s EV charging requirements mark significant progress in supporting the state&rsquo;s EV adoption. By mandating chargers in new developments, more Californians will have access to the necessary infrastructure, accelerating the transition to electric vehicles. This update is particularly impactful for multi-unit developments (MUDs), ensuring that residents in new apartments or condos have convenient charging options. Over the next decade, these changes are expected to lead to thousands of new EV chargers across the state, further cementing California&rsquo;s leadership in the EV revolution.</p>\r\n\r\n<p>=======================</p>\r\n\r\n<p>The Case for Electric Cars with Less Than 200 Miles of Range</p>\r\n\r\n<p>One of the most common questions about electric vehicles (EVs) is, &quot;How far can it go?&quot; A few years ago, this was a significant concern for many potential buyers. However, thanks to advancements in technology, many EVs today can easily exceed 250 miles on a single charge, with some models reaching 300, 400, or even 500 miles.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The fear of running out of power, known as range anxiety, is gradually diminishing among EV buyers. Modern electric vehicles are well-equipped to handle daily commutes, regional travel, and even the occasional road trip. This is due in part to the growing network of fast-charging stations across the country, provided by companies like Tesla and Electrify America.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Improvements in battery technology and vehicle efficiency have led to longer ranges at lower costs. As the demand for EVs increases, investments in battery production have driven costs down even further. For instance, the 2011 Nissan Leaf, which cost $33,000 and had a range of 73 miles, now starts at $27,000 and offers 149 miles of range.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In fact, the cost of EV battery packs has dropped significantly over the years. According to Bloomberg NEF, prices have fallen from $684 per kWh in 2013 to $132 per kWh in 2021. Experts predict that these costs will continue to decline as the global shift toward electric vehicles continues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Given these advancements, is it necessary for every EV to have a range of over 200 or 300 miles? We argue that a sub-200 mile range is not only acceptable but often desirable for many households. Here&rsquo;s why:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Average Commute is Under 40 Miles</strong></p>\r\n\r\n<p>According to the U.S. Census Bureau, the average American commute is 39 miles. This means that any EV on the market today can easily cover the daily commute, even when accounting for factors like cold weather or high-speed driving. With gas prices at record highs, switching to an electric vehicle could be a smart financial move.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Multi-Vehicle Households</strong></p>\r\n\r\n<p>But what about longer trips? For those who prefer not to rely on public fast-charging networks, a gas-powered car or a long-range EV can serve as the primary vehicle for long-distance travel, while a short-range EV can handle daily commuting and in-town errands. A 2018 report by KPMG found that 52% of American households have two or more vehicles, making it easier to incorporate a sub-200 mile range EV into the mix.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Affordable EVs Lead to Greater Adoption</strong></p>\r\n\r\n<p>Shorter-range EVs are typically less expensive because they require fewer batteries, making them more affordable for consumers. As a result, more households can make the switch to electric. Studies have shown that EVs are cheaper to own over time due to lower maintenance costs and higher energy efficiency.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If we want to increase EV adoption and reduce emissions, we need to focus on producing more affordable vehicles. This is especially important as car prices continue to rise due to limited supply.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Available Sub-200 Mile Range Electric Cars</strong></p>\r\n\r\n<p>Here&rsquo;s a list of available short-range EVs and their starting prices. After applying the federal tax credit, many of these vehicles cost around $20,000, making them a budget-friendly option for many households. This is particularly appealing considering that the average new car now sells for over $45,000. Additionally, state rebates, utility incentives, and local programs can further reduce the cost.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vehicle Range Starting MSRP Cost After Federal Tax Credit</p>\r\n\r\n<p>Mazda CX-30 EV 100 $33,470 $25,970</p>\r\n\r\n<p>Mini Cooper SE 114 $29,990 $22,490</p>\r\n\r\n<p>Nissan Leaf &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 149 $27,400 $19,900</p>\r\n\r\n<p>Hyundai Ioniq Electric 170 $33,245 $25,475</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For those interested in a used EV, many older models offer less than 200 miles of range. These include vehicles like the Kia Soul EV, BMW i3, Toyota RAV4 EV, Mitsubishi i-MiEV, and Chevy Spark EV.</p>\r\n\r\n<p>============================</p>\r\n\r\n<p><strong>How to Request EV Charging at Your Workplace</strong></p>\r\n\r\n<p>Charging an electric vehicle (EV) overnight at home is the most convenient and cost-effective method. Similar to charging your phone, you wake up to a fully charged vehicle, ready for the day. Over 85% of EV drivers do this. However, the next best option is charging at your workplace, where your car is parked for long periods, making it ideal for recharging during the workday. If home charging isn&#39;t feasible for you, consider asking your employer to install EV charging stations. Here&#39;s how to approach the conversation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Assess Interest Among Colleagues</strong></p>\r\n\r\n<p>Strength in numbers is key when requesting workplace EV charging. If only a small percentage of employees are interested, the employer may not see it as a priority. However, if a significant portion, such as 20%, shows interest, the employer is more likely to consider the request. Talk to your colleagues to gauge their interest, even if they don&rsquo;t currently own an EV, as having charging stations could encourage them to make the switch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Develop a Detailed Plan</strong></p>\r\n\r\n<p>Before approaching your employer, prepare a comprehensive plan. This should include the estimated number of charging stations, potential locations, suggested vendors, contractors, and the permitting process. Anticipate the questions your employer might ask and address them in your plan. This proactive approach demonstrates your commitment and helps the employer assess the resources needed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Estimate the Costs</strong></p>\r\n\r\n<p>Your plan should include a cost estimate. Consider installation expenses, networking fees (if any), electricity costs, and potential rebates. Some companies may reduce costs by excluding networking or by passing electricity costs onto EV drivers. Having these figures ready will help you present a clear and informed proposal to your employer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Highlight the Benefits</strong></p>\r\n\r\n<p>For your proposal to succeed, both you and your employer need to benefit. You gain convenient workplace charging, while your employer can retain current employees with EVs, attract new ones, and potentially generate revenue. Additionally, workplace charging can help meet green building standards and support a company EV fleet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Identify Decision-Makers</strong></p>\r\n\r\n<p>It&rsquo;s crucial to know who the decision-makers are in your company. Ensure that your request reaches the appropriate individuals who can approve the project or are involved in the decision-making process. Maintaining close communication with these stakeholders will allow you to address concerns promptly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lead the Initiative</strong></p>\r\n\r\n<p>Be prepared to take charge of the project if your employer approves it. Your employer may be reluctant to allocate additional resources, so your willingness to lead the project could be crucial. If your current workload doesn&rsquo;t allow this, consider hiring an EV charging consultant to manage the project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Follow Through on Your Commitment</strong></p>\r\n\r\n<p>After making your request, it&rsquo;s essential to follow through. Whether providing more information or leading the project, meeting the expectations you set will build trust with your employer and increase the likelihood of a successful outcome.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Final Thoughts</strong></p>\r\n\r\n<p>Charging your EV at home or work significantly reduces the need for public charging stops, making your daily routine more convenient. Over 90% of your charging can be done at home or work. If you have further questions or need help with your workplace charging project, feel free to reach out to us. We&rsquo;re here to assist businesses in planning and installing EV charging stations and look forward to helping you with your project!</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'the request. Talk to your colleagues to gauge their interest, even if they don’t currently own an EV, as having charging stations could encourage them to make the switch.', '0000-00-00 00:00:00');
INSERT INTO `blog` (`id`, `category`, `image`, `heading`, `sub_heading1`, `sub_heading2`, `short_passage`, `created_at`) VALUES
(3, 'EV Charging design and engineering', '3 (3).jpg', 'Consectetur adipisicing elit sed do eiusmod tempor incididunt...', '<h3>3 Types of DCFC Site Architecture</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Designing and engineering electric vehicle (EV) charging stations involves a complex set of tasks, with various manufacturers and system components needed to ensure safe and efficient charging. For Direct Current Fast Charging (DCFC) stations, engineers have several site design options based on desired charging performance, budget, and power availability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>There are three primary types of DCFC site architectures: all-in-one, split system, and battery-integrated. Each architecture has distinct advantages and disadvantages related to equipment costs, charging efficiency, and installation complexity.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This article explores the differences between these three DCFC site architectures and identifies the scenarios where each is most suitable.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>All-In-One</h3>\r\n\r\n<p>An all-in-one DCFC, as the name suggests, integrates the power modules within the same unit as the charging dispenser. This design is highly space-efficient, as it eliminates the need for separate power cabinets and rectifiers, which step up grid power and convert Alternating Current (AC) to Direct Current (DC). Additionally, all-in-one units are generally less expensive than other DCFC types.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>However, the power output of an all-in-one DCFC is typically limited, usually ranging from 25-240 kW, depending on the manufacturer. Another drawback is the inability to share power across multiple units, limiting load management and site power optimization.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Popular all-in-one DCFC models include the ABB Terra series, Tritium PKM150, and Autel MaxiCharger DC Fast. Prices start at approximately $50,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><cite>Advantages:</cite></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Lower cost</li>\r\n	<li>Compact station footprint</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Limited power output</p>\r\n	</li>\r\n	<li>\r\n	<p>Inefficient power usage</p>\r\n	</li>\r\n	<li>\r\n	<p>Reduced vehicle throughput</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><em><strong>Ideal Locations:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Grocery stores</p>\r\n	</li>\r\n	<li>\r\n	<p>Medium-duty fleet depots</p>\r\n	</li>\r\n	<li>\r\n	<p>Urban parking garages</p>\r\n	</li>\r\n	<li>\r\n	<p>Split System</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Unlike all-in-one DCFCs, split system designs, also known as distributed systems, feature separate power cabinets and charging dispensers. While this configuration requires more space and is more expensive, it&rsquo;s ideal for sites that demand high charging performance and efficient power distribution across multiple dispensers through load management. Typically, one power cabinet can support up to four dispensers, modulating power to prevent overloading.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A split system DCFC offers higher power output than all-in-one systems, with power cabinets capable of delivering up to 600 kW across multiple dispensers. Some models can even link multiple power cabinets to enhance power distribution efficiency, with the potential to provide over 350 kW per dispenser&mdash;currently the highest output for light-duty EVs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Split system DCFCs are commonly used for new installations, especially at highway rest stops or commercial sites. Notable models include the Chargepoint Express Plus, BTC Gen4 Split System, and Kempower Distributed DCFC. Prices start around $80,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Advantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>High power output</li>\r\n	<li>Increased vehicle throughput</li>\r\n	<li>Efficient power usage</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Higher cost</li>\r\n	<li>Larger station footprint</li>\r\n	<li>Battery-Integrated</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The battery-integrated DCFC addresses a specific issue for site hosts: demand fees charged by electric utilities when power usage exceeds a certain threshold. These fees can be significant, especially for high-power DCFC sites.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By integrating a battery between the utility connection and the charging dispenser, site hosts can avoid these demand fees. The battery charges slowly, avoiding spikes in power usage, and then discharges to supply power to EVs during charging sessions. Another advantage is that this design can often be implemented without requiring costly electrical service upgrades, saving site hosts tens of thousands of dollars.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Although the battery can be installed separately, a battery-integrated DCFC combines it with the charging unit, enlarging the footprint slightly compared to an all-in-one DCFC but requiring less space than a split system. However, these units are the most expensive among the three types, primarily due to the large battery pack. Once the battery is fully discharged, charging performance is limited to the grid connection, typically around 30 kW. Manufacturers claim battery-integrated DCFCs can charge up to 20 EVs per day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Battery packs in these units range from 160 kWh to 466 kWh, with outputs around 200 kW. Popular models include the Freewire Boost 200 and XCharge Net Zero Series. Prices start at approximately $170,000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Advantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Avoids utility demand fees</li>\r\n	<li>Compact station footprint</li>\r\n	<li>Eliminates the need for electrical service upgrades</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Disadvantages:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Most expensive option</li>\r\n	<li>Limited charging performance once the battery is depleted</li>\r\n	<li>Closing Thoughts</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Interested in installing EV chargers at your property? Contact us today, and we&#39;ll guide you through the entire project, ensuring a smooth and successful installation.</p>\r\n\r\n<p>=================</p>\r\n\r\n<p><strong>EV Charging Mandate in New California Developments: 2022 Building Code Update</strong></p>\r\n\r\n<p>As of January 1, 2023, the 2022 California Building Code mandates the inclusion of electric vehicle (EV) chargers in both residential and non-residential properties. This new requirement is part of the broader updates to Part 11 of the Green Building Standards and aligns with California&rsquo;s aggressive EV goals, which include a push for only EV sales by 2035 and significant investments in EV infrastructure. With EV adoption rates in California already at 18%&mdash;compared to just 4% nationally&mdash;the state is leading the charge in EV readiness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The updated code seeks to install EV chargers at various property types, including apartments, shopping centers, and workplaces. Before delving into the specifics of these changes, it&rsquo;s important to understand key terms related to EV infrastructure, such as Automatic Load Management Systems (ALMS), EV Ready Spaces, and Level 2 Electric Vehicle Supply Equipment (EVSE).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Key EV Definitions in the California Building Code</strong></p>\r\n\r\n<p>Automatic Load Management System (ALMS): A system that distributes electrical load across multiple EV chargers to manage power consumption effectively.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Electric Vehicle (EV): Any on-road vehicle primarily powered by an electric motor, including plug-in hybrids, but excluding off-road vehicles like golf carts.</p>\r\n\r\n<p>EV Capable Space: A parking space with the necessary electrical infrastructure to support future EV charging installations.</p>\r\n\r\n<p>EV Charger: Equipment used to charge an electric vehicle.</p>\r\n\r\n<p>EV Ready Space: A parking space with a branch circuit and necessary raceways to accommodate EV charging, terminating in a receptacle or charger.</p>\r\n\r\n<p>EV Charging Space (EV Space): A designated area intended for the future installation of EV charging equipment.</p>\r\n\r\n<p>EV Charging Station (EVCS): One or more EV spaces equipped with chargers, designed for vehicle charging.</p>\r\n\r\n<p>EV Supply Equipment (EVSE): The hardware and wiring necessary to transfer energy from the building&rsquo;s electrical system to the EV.</p>\r\n\r\n<p>Level 2 EVSE: A 208/240-volt, 40-ampere branch circuit for EV charging.</p>\r\n\r\n<p>Low Power Level 2 EV Charging Receptacle: A 208/240-volt, 20-ampere branch circuit designed for EV charging.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neighborhood Electric Vehicle (NEV): A low-speed, zero-emission vehicle.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ZEV</strong>: A vehicle certified to zero-emission standards.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EV Charging Requirements in Residential Developments</strong></p>\r\n\r\n<p>Significant changes have been made to Chapter 4 of the Residential Mandatory Measures. For large residential developments, EV chargers are now required in certain cases. For example, in multi-family or hotel projects with 20 or more units, 5% of parking spaces must include Level 2 chargers. Additionally, 10% of parking must be EV Capable, and 25% must be EV Ready, meaning they have 208/240V outlets for portable EV chargers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In total, 40% of parking spaces in large residential developments must have some form of EV charging infrastructure, a major increase from the previous requirement of 10% for EV Capable spaces. The code also introduces low-power EV charging for sites like apartments and hotels, where overnight vehicle dwell time makes this cost-effective. Low-power charging is cheaper than both Level 2 and DC Fast Charging options.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EV Charging Requirements in Non-Residential Developments</strong></p>\r\n\r\n<p>Chapter Five of the Green Building Standard details the requirements for non-residential developments. For example, properties with 10-25 parking spaces must include several EV Capable spaces. Properties with 26 or more parking spaces are required to provide both EV Capable and EV chargers. For sites with over 200 parking spaces, 20% must be EV Capable, and 25% of those must be equipped with EV chargers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The code also allows the installation of a DC Fast Charger to substitute for five AC chargers, and includes provisions for medium and heavy-duty EV infrastructure at locations like warehouses and retail centers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Exceptions and Additional Notes</strong></p>\r\n\r\n<p>Certain projects are exempt from these regulations, as determined by the Authority Having Jurisdiction (AHJ). The code also permits the use of ALMS to manage the overall electrical load from EV chargers, addressing concerns about the impact of EVs on the electrical grid.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Another key provision is that EV charging spaces now count as parking spaces in new developments, ensuring that developers don&rsquo;t lose parking capacity. However, once</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>installed, these spaces must be used exclusively for charging EVs, with penalties for non-compliance already being enforced by some jurisdictions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Unchanged Sections of the Code</strong></p>\r\n\r\n<p>Accessibility requirements for public EV charging stations remain unchanged. Single-family homes are still only required to provide EV Capable spaces, leaving homeowners to make necessary electrical modifications for home charging.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Conclusion</strong></p>\r\n\r\n<p>The 2022 California Building Code&rsquo;s EV charging requirements mark significant progress in supporting the state&rsquo;s EV adoption. By mandating chargers in new developments, more Californians will have access to the necessary infrastructure, accelerating the transition to electric vehicles. This update is particularly impactful for multi-unit developments (MUDs), ensuring that residents in new apartments or condos have convenient charging options. Over the next decade, these changes are expected to lead to thousands of new EV chargers across the state, further cementing California&rsquo;s leadership in the EV revolution.</p>\r\n\r\n<p>=======================</p>\r\n\r\n<p>The Case for Electric Cars with Less Than 200 Miles of Range</p>\r\n\r\n<p>One of the most common questions about electric vehicles (EVs) is, &quot;How far can it go?&quot; A few years ago, this was a significant concern for many potential buyers. However, thanks to advancements in technology, many EVs today can easily exceed 250 miles on a single charge, with some models reaching 300, 400, or even 500 miles.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The fear of running out of power, known as range anxiety, is gradually diminishing among EV buyers. Modern electric vehicles are well-equipped to handle daily commutes, regional travel, and even the occasional road trip. This is due in part to the growing network of fast-charging stations across the country, provided by companies like Tesla and Electrify America.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Improvements in battery technology and vehicle efficiency have led to longer ranges at lower costs. As the demand for EVs increases, investments in battery production have driven costs down even further. For instance, the 2011 Nissan Leaf, which cost $33,000 and had a range of 73 miles, now starts at $27,000 and offers 149 miles of range.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In fact, the cost of EV battery packs has dropped significantly over the years. According to Bloomberg NEF, prices have fallen from $684 per kWh in 2013 to $132 per kWh in 2021. Experts predict that these costs will continue to decline as the global shift toward electric vehicles continues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Given these advancements, is it necessary for every EV to have a range of over 200 or 300 miles? We argue that a sub-200 mile range is not only acceptable but often desirable for many households. Here&rsquo;s why:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Average Commute is Under 40 Miles</strong></p>\r\n\r\n<p>According to the U.S. Census Bureau, the average American commute is 39 miles. This means that any EV on the market today can easily cover the daily commute, even when accounting for factors like cold weather or high-speed driving. With gas prices at record highs, switching to an electric vehicle could be a smart financial move.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Multi-Vehicle Households</strong></p>\r\n\r\n<p>But what about longer trips? For those who prefer not to rely on public fast-charging networks, a gas-powered car or a long-range EV can serve as the primary vehicle for long-distance travel, while a short-range EV can handle daily commuting and in-town errands. A 2018 report by KPMG found that 52% of American households have two or more vehicles, making it easier to incorporate a sub-200 mile range EV into the mix.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Affordable EVs Lead to Greater Adoption</strong></p>\r\n\r\n<p>Shorter-range EVs are typically less expensive because they require fewer batteries, making them more affordable for consumers. As a result, more households can make the switch to electric. Studies have shown that EVs are cheaper to own over time due to lower maintenance costs and higher energy efficiency.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If we want to increase EV adoption and reduce emissions, we need to focus on producing more affordable vehicles. This is especially important as car prices continue to rise due to limited supply.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Available Sub-200 Mile Range Electric Cars</strong></p>\r\n\r\n<p>Here&rsquo;s a list of available short-range EVs and their starting prices. After applying the federal tax credit, many of these vehicles cost around $20,000, making them a budget-friendly option for many households. This is particularly appealing considering that the average new car now sells for over $45,000. Additionally, state rebates, utility incentives, and local programs can further reduce the cost.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vehicle Range Starting MSRP Cost After Federal Tax Credit</p>\r\n\r\n<p>Mazda CX-30 EV 100 $33,470 $25,970</p>\r\n\r\n<p>Mini Cooper SE 114 $29,990 $22,490</p>\r\n\r\n<p>Nissan Leaf &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 149 $27,400 $19,900</p>\r\n\r\n<p>Hyundai Ioniq Electric 170 $33,245 $25,475</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For those interested in a used EV, many older models offer less than 200 miles of range. These include vehicles like the Kia Soul EV, BMW i3, Toyota RAV4 EV, Mitsubishi i-MiEV, and Chevy Spark EV.</p>\r\n\r\n<p>============================</p>\r\n\r\n<p><strong>How to Request EV Charging at Your Workplace</strong></p>\r\n\r\n<p>Charging an electric vehicle (EV) overnight at home is the most convenient and cost-effective method. Similar to charging your phone, you wake up to a fully charged vehicle, ready for the day. Over 85% of EV drivers do this. However, the next best option is charging at your workplace, where your car is parked for long periods, making it ideal for recharging during the workday. If home charging isn&#39;t feasible for you, consider asking your employer to install EV charging stations. Here&#39;s how to approach the conversation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Assess Interest Among Colleagues</strong></p>\r\n\r\n<p>Strength in numbers is key when requesting workplace EV charging. If only a small percentage of employees are interested, the employer may not see it as a priority. However, if a significant portion, such as 20%, shows interest, the employer is more likely to consider the request. Talk to your colleagues to gauge their interest, even if they don&rsquo;t currently own an EV, as having charging stations could encourage them to make the switch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Develop a Detailed Plan</strong></p>\r\n\r\n<p>Before approaching your employer, prepare a comprehensive plan. This should include the estimated number of charging stations, potential locations, suggested vendors, contractors, and the permitting process. Anticipate the questions your employer might ask and address them in your plan. This proactive approach demonstrates your commitment and helps the employer assess the resources needed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Estimate the Costs</strong></p>\r\n\r\n<p>Your plan should include a cost estimate. Consider installation expenses, networking fees (if any), electricity costs, and potential rebates. Some companies may reduce costs by excluding networking or by passing electricity costs onto EV drivers. Having these figures ready will help you present a clear and informed proposal to your employer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Highlight the Benefits</strong></p>\r\n\r\n<p>For your proposal to succeed, both you and your employer need to benefit. You gain convenient workplace charging, while your employer can retain current employees with EVs, attract new ones, and potentially generate revenue. Additionally, workplace charging can help meet green building standards and support a company EV fleet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Identify Decision-Makers</strong></p>\r\n\r\n<p>It&rsquo;s crucial to know who the decision-makers are in your company. Ensure that your request reaches the appropriate individuals who can approve the project or are involved in the decision-making process. Maintaining close communication with these stakeholders will allow you to address concerns promptly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lead the Initiative</strong></p>\r\n\r\n<p>Be prepared to take charge of the project if your employer approves it. Your employer may be reluctant to allocate additional resources, so your willingness to lead the project could be crucial. If your current workload doesn&rsquo;t allow this, consider hiring an EV charging consultant to manage the project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Follow Through on Your Commitment</strong></p>\r\n\r\n<p>After making your request, it&rsquo;s essential to follow through. Whether providing more information or leading the project, meeting the expectations you set will build trust with your employer and increase the likelihood of a successful outcome.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Final Thoughts</strong></p>\r\n\r\n<p>Charging your EV at home or work significantly reduces the need for public charging stops, making your daily routine more convenient. Over 90% of your charging can be done at home or work. If you have further questions or need help with your workplace charging project, feel free to reach out to us. We&rsquo;re here to assist businesses in planning and installing EV charging stations and look forward to helping you with your project!</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'the request. Talk to your colleagues to gauge their interest, even if they don’t currently own an EV, as having charging stations could encourage them to make the switch.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'EV Charging Feasibility Study'),
(2, 'EV Charging Feasibility Management'),
(3, 'EV Charging design and engineering');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(1500) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `heading`, `sub_heading`, `image`) VALUES
(1, 'Our recent clients', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1.jpeg'),
(2, '', '', '2.png'),
(3, '', '', '3.png'),
(4, '', '', '4.jpg'),
(5, '', '', '5.jpg'),
(6, '', '', '6.png'),
(7, '', '', '7.png'),
(8, '', '', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `p1` varchar(256) NOT NULL,
  `p2` varchar(256) NOT NULL,
  `p3` varchar(256) NOT NULL,
  `p4` varchar(256) NOT NULL,
  `p5` varchar(256) NOT NULL,
  `p6` varchar(256) NOT NULL,
  `p7` varchar(256) NOT NULL,
  `p8` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`id`, `heading`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`) VALUES
(1, 'EV Charging Consultant- What They Do?', 'Project Management', 'EVSE and EVSP Recommendations', 'Design and Engineering Coordination', 'Project Planning', 'INSTALLATION Coordination', 'Rebate Application Coordination', 'Commissioning and Training', 'feasibility study'),
(2, ' Type of Businesses That Are a Great Match', 'Workplaces', 'Apartments', 'Commercial/Retail', 'Condos', 'Hotels', 'Government', 'Parking Lots/Garages', 'Workplaces');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Developer', 'developer@gmail.com', 'PHP'),
(3, 'Malissa Fierro', 'sidbresnen@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `short_heading` varchar(256) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` text NOT NULL,
  `logo_heading` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `email`, `short_heading`, `facebook`, `twitter`, `linkedin`, `address`, `phone`, `logo_heading`) VALUES
(1, 'admin@demo.com', '<h1>&nbsp;</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.....</p>\r\n', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'city center', '+0123456789', 'Logo Area');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `under_content` longtext NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `heading`, `content`, `under_content`, `image`) VALUES
(1, 'Frequently Asked Questions', 'What is the Exact Work of an EV Charging Consultant?', '<p>The job of an EV charging consultant is to guide a business throughout the EV charging process. They can arrange the plan and design of EV charging, send RFPs to charging contractors and vendors, gain success in the permission process, easily locate the available incentives, and others.</p>\r\n', 'faqs.jpg'),
(2, '', 'Businesses Should Hire An EV Charging Consultant- Why?', '<p>A reasonably complicated topic is EV charging. You as a business can incur a lot of useless money and time to navigate the pitfalls. Like, a networked charger is needed by some commerce and some may not. If you as a business purchases a network charger then you get bound towards investing hundreds of dollars in the yearly software fees.</p>\r\n\r\n<p>A reasonably complicated topic is EV charging. You as a business can incur a lot of useless money and time to navigate the pitfalls. Like, a networked charger is needed by some commerce and some may not. If you as a business purchases a network charger then you get bound towards investing hundreds of dollars in the yearly software fees.</p>\r\n', ''),
(3, '', 'What is The Cost of an EV Charging Consultant?', '<p>We have kept our charges comparatively lower but it varies depending on the project. Several factors contribute to determining the cost like the scale of the project, number of rebate applications, and many more. You can always request a quote to figure out the charge of your project.</p>\r\n', ''),
(4, '', 'Businesses Should Install EV Charging Stations- Why?', 'A great way to attract/retain customers, residents, or employees is installing EV charging stations. In some cases, you may also discover that revenue is generated by EV charging stations. Lastly, businesses willing to renovate their fleets to electric, for them EV charging stations are essential.', '');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility_blog`
--

CREATE TABLE `feasibility_blog` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image_heading` varchar(256) NOT NULL,
  `image_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feasibility_blog`
--

INSERT INTO `feasibility_blog` (`id`, `heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES
(1, 'Not sure about EV blog writing? Conduct an EV blog writing!', '<p>It can be costly to install EV &nbsp;blog writing stations. Consider taking an EV &nbsp;blog writing before significant capital is spent.</p>\r\n', '172422726201.jpg', '172422726211.jpg', 'Why Conduct an EV Blog Writing?', '<h2>With Proper Planning Comes Huge Savings Later</h2>\r\n\r\n<p>We&rsquo;ll identify the most cost-effective path and high-risk factors, with the EV Charging Feasibility Study. Thus, plan early and enjoy less project cost.</p>\r\n'),
(2, '', '', '02.jpg', '172422726211.jpg', '', '<h2>Know Before You Go</h2>\r\n\r\n<p>A few thousand to several thousand dollars can be used for a complete installation of an EV charging station. It is worth knowing the approximate expenditure involved in the installation.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', '1 (3).jpg', '172422726211.jpg', '', '<h2>Meet Expectations</h2>\r\n\r\n<p>Do you have any track on how the installation will appear, how much will the installation cost, or how many chargers are needed? Before you spend any significant money, we&rsquo;ll answer all the aforementioned questions.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility_engineering`
--

CREATE TABLE `feasibility_engineering` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image_heading` varchar(256) NOT NULL,
  `image_description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feasibility_engineering`
--

INSERT INTO `feasibility_engineering` (`id`, `heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES
(1, 'Are you looking for services in EV Charging Design and Engineering?', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '172422348402.jpg', '172422348411.jpg', 'EV Charging Design and Engineering Services', '<h2>With Proper Planning Comes Huge Savings Later</h2>\r\n\r\n<p>With Proper Planning Comes Huge Savings Later</p>\r\n\r\n<p>We&rsquo;ll identify the most cost-effective path and high-risk factors, with the EV Charging Feasibility Study.</p>\r\n'),
(2, '', '', '02.jpg', '172422348411.jpg', '', '<h2>Know Before You Go</h2>\r\n\r\n<p>A few thousand to several thousand dollars can be used for a complete installation of an EV charging station. It is worth knowing the approximate expenditure involved in the installation.</p>\r\n'),
(3, '', '', '1 (3).jpg', '172422348411.jpg', '', '<h2>Meet Expectations</h2>\r\n\r\n<p>Do you have any track on how the installation will appear, how much will the installation cost, or how many chargers are needed? Before you spend any significant money, we&rsquo;ll answer all the aforementioned questions.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility_installation`
--

CREATE TABLE `feasibility_installation` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image_heading` varchar(256) NOT NULL,
  `image_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feasibility_installation`
--

INSERT INTO `feasibility_installation` (`id`, `heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES
(1, ' Conduct an DC first charging installation!', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</p>\r\n', '172422658102(1).jpg', '172422658111.jpg', 'Why Conduct anDC first charging installation?', '<h2>With Proper Planning Comes Huge Savings Later</h2>\r\n\r\n<p>We&rsquo;ll identify the most cost-effective path and high-risk factors, with the EV Charging Feasibility Study. Thus, plan early and enjoy less project cost.</p>\r\n'),
(2, '', '', '172422665601.jpg', '172422658111.jpg', '', '<h2>Know Before You Go</h2>\r\n\r\n<p>A few thousand to several thousand dollars can be used for a complete installation of an EV charging station. It is worth knowing the approximate expenditure involved in the installation.</p>\r\n'),
(3, '', '', '1 (3).jpg', '172422658111.jpg', '', '<h2>Meet Expectations</h2>\r\n\r\n<p>Do you have any track on how the installation will appear, how much will the installation cost, or how many chargers are needed? Before you spend any significant money, we&rsquo;ll answer all the aforementioned questions.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility_management`
--

CREATE TABLE `feasibility_management` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image_heading` varchar(256) NOT NULL,
  `image_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feasibility_management`
--

INSERT INTO `feasibility_management` (`id`, `heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES
(1, 'Not sure about EV charging? Administer an EV charging suitability study!', '<p>It can be costly to install EV charging stations. Consider taking an EV charging feasibility study before significant capital is spent.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '172422211401.jpg', '172422211411.jpg', 'Perform an EV Charging Feasibility Investigation- Why?', '<h2>With Proper Planning Comes Huge Savings Later</h2>\r\n\r\n<p>We&rsquo;ll identify the most cost-effective path and high-risk factors, with the EV Charging Feasibility Study. Thus, plan early and enjoy less project cost.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n'),
(2, '', '', '02.jpg', '172422211411.jpg', '', '<h2>Know Before You Go</h2>\r\n\r\n<p>A few thousand to several thousand dollars can be used for a complete installation of an EV charging station. It is worth knowing the approximate expenditure involved in the installation.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', '1 (3).jpg', '172422211411.jpg', '', '<h2>Meet Expectations</h2>\r\n\r\n<p>Do you have any track on how the installation will appear, how much will the installation cost, or how many chargers are needed? Before you spend any significant money, we&rsquo;ll answer all the aforementioned questions.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility_program`
--

CREATE TABLE `feasibility_program` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image_heading` varchar(256) NOT NULL,
  `image_description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feasibility_program`
--

INSERT INTO `feasibility_program` (`id`, `heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES
(1, 'Not sure about EV charging? Conduct an EV charging program management!', '<p>With the Right EV Charging Project Manager Get The Job Done Perfectly</p>\r\n\r\n<p>For those looking to save money and time through their electric vehicle charging project can undoubtedly rely on our EV charging project management service.</p>\r\n', '172422460502(1).jpg', '172422460511.jpg', 'Why Conduct an EV Charging Project Management?', '<h2>With Proper Planning Comes Huge Savings Later</h2>\r\n\r\n<p>We&rsquo;ll identify the most cost-effective path and high-risk factors, with the EV Charging Feasibility Study. Thus, plan early and enjoy less project cost.&nbsp;</p>\r\n'),
(2, '', '', '02.jpg', '172422460511.jpg', '', '<h2>Know Before You Go</h2>\r\n\r\n<p>A few thousand to several thousand dollars can be used for a complete installation of an EV charging station. It is worth knowing the approximate expenditure involved in the installation.</p>\r\n'),
(3, '', '', '1 (3).jpg', '172422460511.jpg', '', '<h2>Meet Expectations</h2>\r\n\r\n<p>Do you have any track on how the installation will appear, how much will the installation cost, or how many chargers are needed? Before you spend any significant money, we&rsquo;ll answer all the aforementioned questions.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility_study`
--

CREATE TABLE `feasibility_study` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image_heading` varchar(256) NOT NULL,
  `image_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feasibility_study`
--

INSERT INTO `feasibility_study` (`id`, `heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES
(1, 'Not sure about EV charging? Administer an EV charging suitability study!11', '<p>It can be costly to install EV charging stations. Consider taking an EV charging feasibility study before significant capital is spent.</p>\r\n\r\n<p>you</p>\r\n', '172413261501.jpg', '172413257911.jpg', 'Perform an EV Charging Feasibility Investigation- Why?', '<h2>With Proper Planning Comes Huge Savings Later</h2>\r\n\r\n<p>With Proper Planning Comes Huge Savings Later</p>\r\n\r\n<p>We&rsquo;ll identify the most cost-effective path and high-risk factors, with the EV Charging Feasibility Study. Thus, plan early and enjoy less project cost.</p>\r\n'),
(2, '', '', '172413283002(1).jpg', '172413257911.jpg', '', '<h2>Know Before You Go</h2>\r\n\r\n<p>A few thousand to several thousand dollars can be used for a complete installation of an EV charging station. It is worth knowing the approximate expenditure involved in the installation.</p>\r\n'),
(3, '', '', '17241328721(3).jpg', '172413257911.jpg', '', '<h2>Meet Expectations</h2>\r\n\r\n<p>Do you have any track on how the installation will appear, how much will the installation cost, or how many chargers are needed? Before you spend any significant money, we&rsquo;ll answer all the aforementioned questions.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `description1` longtext NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL,
  `description2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `image1`, `description1`, `image2`, `image3`, `description2`) VALUES
(1, '17241337181(4).jpg', '<h2>EV Charging Infrastructure</h2>\r\n\r\n<p>Just 2,100 EV charging stations&nbsp; (sites) were functional in 2011. However, at the end of 2022, more than 52,000 stations were functional. In the EV charging infrastructure, millions of dollars of investment are made each year. Below in the chart, it is demonstrated that at a rapid pace, EV charging stations are being installed to accommodate the growth of e-transportation.</p>\r\n', '17241337182(2).jpg', '17241337183(1).jpg', '<h2>EV Sales and Market Share</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `heading`, `image`) VALUES
(1, 'Our Charging Partners', '1(1).jpg'),
(2, '', '2 (1).jpg'),
(3, '', '3 (1).png'),
(4, '', '4.png'),
(5, '', '5.png'),
(6, '', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `description`) VALUES
(1, '17241322931(5).jpg', '<h3>11Napa Design Partners<br />\r\n- Napa, CA</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n</ul>\r\n'),
(2, '2 (3).jpg', '<h3>Napa Design Partners<br />\r\n- Napa, CA</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n</ul>\r\n'),
(3, '3 (2).jpg', '<h3>Napa Design Partners<br />\r\n- Napa, CA</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n</ul>\r\n'),
(4, '4 (1).jpg', '<h3>Napa Design Partners<br />\r\n- Napa, CA</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n</ul>\r\n'),
(5, '5 (1).jpg', '<h3>Napa Design Partners<br />\r\n- Napa, CA</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n</ul>\r\n'),
(6, '6 (1).jpg', '<h3>Napa Design Partners<br />\r\n- Napa, CA</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n	<li>&nbsp;Lorem ipsum dolor sit amet.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `email` varchar(1500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(1500) NOT NULL,
  `apartment` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `project_date` varchar(256) NOT NULL,
  `new_existing` varchar(256) NOT NULL,
  `property` varchar(256) NOT NULL,
  `parking` varchar(256) NOT NULL,
  `electric` varchar(256) NOT NULL,
  `ev_charging` varchar(256) NOT NULL,
  `bill_drivers` varchar(256) NOT NULL,
  `ev_chargers` varchar(256) NOT NULL,
  `about_us` longtext NOT NULL,
  `questions` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `apartment`, `city`, `state`, `zipcode`, `description`, `project_date`, `new_existing`, `property`, `parking`, `electric`, `ev_charging`, `bill_drivers`, `ev_chargers`, `about_us`, `questions`) VALUES
(1, 'php', 'developer', 'jetweb', 'developer@gmail.com', '4587963', 'ambuja', 'null', 'durgapur', 'paschim bardhaman', '1078964', 'test', '6-12 months', 'Existing building', ' Office/Workplace', 'Assigned', 'test', '5', 'Not sure yet', 'No', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `sub_heading` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `image`, `sub_heading`) VALUES
(1, 'EV Charging Project Management', '17239902861.jpg', 'If you are new to the concept of EVs then getting EV charging installed can be challenging. You’ll get a professional’s assistance to be aware of the issues. We provide services like planning, designing, permitting, and installations.'),
(2, 'EV Charging Rebate/Grant Application', '17241316612.jpg', 'To encourage the installation of EV charging stations, millions of dollars in incentives are available. We’ll be working for you to find a rebate program and complete the paperwork. In many cases, it has been seen that 50 to 100 percent of the complete project costs are covered by these refunds. '),
(9, 'EV Charging Feasibility Study', '3.jpg', 'You might be interested in getting EV charging stations installed at your business but confused about whether it’ll be a perfect fit. So, we will be helping you by putting together a study about the estimated costs, researching available incentives, developing a preliminary plan, and others.');

-- --------------------------------------------------------

--
-- Table structure for table `services_sidebar_blog`
--

CREATE TABLE `services_sidebar_blog` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sidebar_blog`
--

INSERT INTO `services_sidebar_blog` (`id`, `heading`, `sub_heading`, `image`, `description`) VALUES
(1, 'An EV Charging Feasibility Study Includes:', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Preliminary Site Assessment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 'i1.png', '<h3>Preliminary Site Assessment</h3>\r\n\r\n<p>This phase is to determine the number of chargers you might need, the appropriate position where they should be located, and the approximate amount required for installation.</p>\r\n'),
(2, '', '', 'i2.png', '<h3>Equipment and Network Recommendations</h3>\r\n\r\n<p>The market is overflowing with networking companies and dozens of charger vendors. With each of them having specific features and several price points.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', 'i3.png', '<h3>Planning and Design Coordination</h3>\r\n\r\n<p>It can be challenging to comply with local building codes and regulations. To ensure the plans meet the code, we&rsquo;ll work with the design team. If needed, we can even provide engineering services.</p>\r\n'),
(4, '', '', 'i4.png', '<h3>Contractor Solicitation and Coordination</h3>\r\n\r\n<p>On your behalf, we&rsquo;ll draft and solicit the contractor RPF as the project manager. Finding a contractor with a mixture of both high quality and cost-effective&nbsp;</p>\r\n'),
(5, '', '', 'i5.png', '<h3>Installation Coordination</h3>\r\n\r\n<p>Now to ensure the start of the installation and ends within your timeline, we&rsquo;ll coordinate with the contractor. Throughout the entire process, we&rsquo;ll provide regular updates. Lastly, to ensure the installation is completed as per the approved plans, we&rsquo;ll conduct quality control inspections.</p>\r\n'),
(6, '', '', 'i6.png', '<h3>Permitting and Utility Approval Coordination</h3>\r\n\r\n<p>A myriad of hurdles can be brought through permitting. But you do not have to worry as we&rsquo;ve assisted the design team throughout the entire process. And if any service upgrade is required we&rsquo;ll gain utility approval.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services_sidebar_engineering`
--

CREATE TABLE `services_sidebar_engineering` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sidebar_engineering`
--

INSERT INTO `services_sidebar_engineering` (`id`, `heading`, `sub_heading`, `image`, `description`) VALUES
(1, 'EV Charging Design and Engineering Services', 'Are you looking for services in EV Charging Design and Engineering? We can help! To provide quick and cost effective service, we work with a pool of partners.  Included in EV Charging Design and Engineering Services are', '1724223658i1.png', '<h3>Preliminary Site Plan and Electrical Calculations</h3>\r\n\r\n<p>We&rsquo;ll offer a site plan describing the positions of EV chargers and associated equipment that are going to be installed. The rough electrical calculations are also provided by us.</p>\r\n'),
(2, '', '', 'i2.png', '<h3>Equipment and Network Recommendations</h3>\r\n\r\n<p>The market is overflowing with networking companies and dozens of charger vendors. With each of them having specific features and several price points.For your specific site, we&rsquo;ll recommend the best one among the available ones.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', 'i3.png', '<h3>Planning and Design Coordination</h3>\r\n\r\n<p>It can be challenging to comply with local building codes and regulations. To ensure the plans meet the code, we&rsquo;ll work with the design team. If needed, we can even provide engineering services.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(4, '', '', 'i4.png', '<h3>Equipment Recommendations</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n'),
(5, '', '', 'i5.png', '<h3>Demand Survey</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(6, '', '', 'i6.png', '<h3>Operating Cost Estimate</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services_sidebar_installation`
--

CREATE TABLE `services_sidebar_installation` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sidebar_installation`
--

INSERT INTO `services_sidebar_installation` (`id`, `heading`, `sub_heading`, `image`, `description`) VALUES
(1, 'Done Quickly Installation of DC Fast Charging- As It Should Be!', 'The quickest way to charge an electric vehicle is provided by DC Fast Chargers. The entire process of our turnkey services are handled by an EV charging consultant saving both money and time.', '1724226798i1.png', '<h3>Preliminary Site Assessment</h3>\r\n\r\n<p>This phase is to determine the number of chargers you might need, the appropriate position where they should be located, and the approximate amount required for installation.</p>\r\n'),
(2, '', '', 'i2.png', '<h3>Equipment and Network Recommendations</h3>\r\n\r\n<p>The market is overflowing with networking companies and dozens of charger vendors. With each of them having specific features and several price points.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', 'i3.png', '<h3>Planning and Design Coordination</h3>\r\n\r\n<p>It can be challenging to comply with local building codes and regulations. To ensure the plans meet the code, we&rsquo;ll work with the design team. If needed, we can even provide engineering services.</p>\r\n'),
(4, '', '', 'i4.png', '<h3>Permitting and Utility Approval Coordination</h3>\r\n\r\n<p>A myriad of hurdles can be brought through permitting. But you do not have to worry as we&rsquo;ve assisted the design team throughout the entire process. And if any service upgrade is required we&rsquo;ll gain utility approval.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(5, '', '', 'i5.png', '<h3>Contractor Solicitation and Coordination</h3>\r\n\r\n<p>On your behalf, we&rsquo;ll draft and solicit the contractor RPF as the project manager. Finding a contractor with a mixture of both high quality and cost-effective&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services_sidebar_management`
--

CREATE TABLE `services_sidebar_management` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(1500) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sidebar_management`
--

INSERT INTO `services_sidebar_management` (`id`, `heading`, `sub_heading`, `image`, `description`) VALUES
(1, 'An EV Charging Project Management Includes:', '', '1724222681i1.png', '<h3>Preliminary Site Assessment</h3>\r\n\r\n<p>This phase is to determine the number of chargers you might need, the appropriate position where they should be located, and the approximate amount required for installation.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, '', '', 'i2.png', '<h3>Equipment and Network Recommendations</h3>\r\n\r\n<p>The market is overflowing with networking companies and dozens of charger vendors. With each of them having specific features and several price points.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', 'i3.png', '<h3>Planning and Design Coordination</h3>\r\n\r\n<p>It can be challenging to comply with local building codes and regulations. To ensure the plans meet the code, we&rsquo;ll work with the design team. If needed, we can even provide engineering services.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(4, '', '', 'i4.png', '<h3>Permitting and Utility Approval Coordination</h3>\r\n\r\n<p>A myriad of hurdles can be brought through permitting. But you do not have to worry as we&rsquo;ve assisted the design team throughout the entire process. And if any service upgrade is required we&rsquo;ll gain utility approval.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(5, '', '', 'i5.png', '<h3>Contractor Solicitation and Coordination</h3>\r\n\r\n<p>On your behalf, we&rsquo;ll draft and solicit the contractor RPF as the project manager. Finding a contractor with a mixture of both high quality and cost-effective&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(6, '', '', 'i6.png', '<h3>Installation Coordination</h3>\r\n\r\n<p>Now to ensure the start of the installation and ends within your timeline, we&rsquo;ll coordinate with the contractor. Throughout the entire process, we&rsquo;ll provide regular updates. Lastly, to ensure the installation is completed as per the approved plans, we&rsquo;ll conduct quality control inspections.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services_sidebar_program`
--

CREATE TABLE `services_sidebar_program` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sidebar_program`
--

INSERT INTO `services_sidebar_program` (`id`, `heading`, `sub_heading`, `image`, `description`) VALUES
(1, 'Services Included in EV Charging Project Management:', '', '1724225023i1.png', '<h3>Planning and Design Coordination</h3>\r\n\r\n<p>It can be challenging to comply with local building codes and regulations. To ensure the plans meet the code, we&rsquo;ll work with the design team. If needed, we can even provide engineering services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, '', '', 'i2.png', '<h3>Equipment and Network Recommendations</h3>\r\n\r\n<p>The market is overflowing with networking companies and dozens of charger vendors. With each of them having specific features and several price points.For your specific site, we&rsquo;ll recommend the best one among the available ones.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '', '', 'i3.png', '<h3>Planning and Design Coordination</h3>\r\n\r\n<p>It can be challenging to comply with local building codes and regulations. To ensure the plans meet the code, we&rsquo;ll work with the design team. If needed, we can even provide engineering services.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(4, '', '', 'i4.png', '<h3>Permitting and Utility Approval Coordination</h3>\r\n\r\n<p>A myriad of hurdles can be brought through permitting. But you do not have to worry as we&rsquo;ve assisted the design team throughout the entire process. And if any service upgrade is required we&rsquo;ll gain utility approval.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(5, '', '', 'i5.png', '<h3>Contractor Solicitation and Coordination</h3>\r\n\r\n<p>On your behalf, we&rsquo;ll draft and solicit the contractor RPF as the project manager. Finding a contractor with a mixture of both high quality and cost-effective can be problematic but we&rsquo;ll help you to get hold of one.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(6, '', '', 'i6.png', '<h3>Installation Coordination</h3>\r\n\r\n<p>Now to ensure the start of the installation and ends within your timeline, we&rsquo;ll coordinate with the contractor. Throughout the entire process, we&rsquo;ll provide regular updates. Lastly, to ensure the installation is completed as per the approved plans, we&rsquo;ll conduct quality control inspections.</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services_sidebar_study`
--

CREATE TABLE `services_sidebar_study` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sidebar_study`
--

INSERT INTO `services_sidebar_study` (`id`, `heading`, `sub_heading`, `image`, `description`) VALUES
(1, 'Points Mentioned are Included in an EV Charging Feasibility Study:', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1724135390i6.png', '<h3>Preliminary Site Estimate</h3>\r\n\r\n<p>It&#39;s relatively easy for some sites to proceed with install stations, while others are complex.&nbsp; To make the path forward well-defined, we&rsquo;ll assess the needed aspects to get chargers.</p>\r\n'),
(2, '', '', 'i2.png', '<h3>Rebate Search</h3>\r\n\r\n<p>In EV charging, you&rsquo;ll get to recognize that millions of dollars are available. For you, we&rsquo;ll comprehend the search of available programs through several databases. Additionally, rebates can cut over 50% of the project cost.</p>\r\n'),
(3, '', '', 'i3.png', '<h3>Estimate of The Project Cost</h3>\r\n\r\n<p>The cost of installation of EV charging stations can vary wildly.</p>\r\n'),
(4, '', '', 'i4.png', '<h3>Equipment Recommendations</h3>\r\n\r\n<p>The market has numberless EV charging networks and vendors; each varies in price and feature. Thus, it will be difficult to decide on one. To pick the best fit networking and equipment, we as EV charging professionals will help you to assess the same.</p>\r\n'),
(5, '', '', 'i5.png', '<h3>Demand Survey</h3>\r\n\r\n<p>It is a complex hurdle to discover how many charging stations are needed. For both today and the future, we&rsquo;ll survey the site host and EV drivers to calculate how many are required.</p>\r\n'),
(6, '', '', 'i6.png', '<h3>Operating Cost Estimate</h3>\r\n\r\n<p>Generate revenue with EV charging stations. How much will it cost each year to provide free EV charging? To determine whether EV chargers are a worthwhile investment, we&rsquo;ll help you estimate total operating expenses.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `sub_heading` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `heading`, `image`, `sub_heading`) VALUES
(1, 'Acquire and Preserve Talent', 'i6.png', 'The interests of potential or present workers are attracted by those workplaces that have set provisions for charging electric vehicles.'),
(4, 'Increase Customer Traffic and Dwell Time', '03.png', 'The buyers are more attracted to businesses that allow charging resulting in more traffic and longer stays.'),
(5, 'Achieve Green Building Certifications', '04.png', ' Programs like LEED, which promote green building, offer award points for EV charging and can appeal to potential employees or customers.'),
(6, 'Achieve Green Building Certifications', '02.png', ' Programs like LEED, which promote green building, offer award points for EV charging and can appeal to potential employees or customers.');

-- --------------------------------------------------------

--
-- Table structure for table `station_map`
--

CREATE TABLE `station_map` (
  `id` int(11) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `station_map`
--

INSERT INTO `station_map` (`id`, `description`) VALUES
(1, '<h2>Public and Private EV Charging Station Map</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `heading`, `image`, `name`, `title`) VALUES
(1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.11', '1.jpg', 'Malissa Fierro', 'Director'),
(2, '', 'team-2.jpg', 'Florence Long', 'Project Manager'),
(3, '', 'team-3.jpg', 'Melvin Castillo', 'Project Manager'),
(4, '', 'team-4.jpg', 'thumb John Welsh', '      John Welsh');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `heading`) VALUES
(1, '<h1>Provide EV Charging- Why?</h1>\r\n\r\n<p>There are numerous benefits of providing EV charging for businesses of all kinds. Some of them are described here:</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_consultant`
--
ALTER TABLE `about_consultant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_blog`
--
ALTER TABLE `banner_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_engineering`
--
ALTER TABLE `banner_engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_installation`
--
ALTER TABLE `banner_installation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_management`
--
ALTER TABLE `banner_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_program`
--
ALTER TABLE `banner_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_study`
--
ALTER TABLE `banner_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility_blog`
--
ALTER TABLE `feasibility_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility_engineering`
--
ALTER TABLE `feasibility_engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility_installation`
--
ALTER TABLE `feasibility_installation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility_management`
--
ALTER TABLE `feasibility_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility_program`
--
ALTER TABLE `feasibility_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility_study`
--
ALTER TABLE `feasibility_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sidebar_blog`
--
ALTER TABLE `services_sidebar_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sidebar_engineering`
--
ALTER TABLE `services_sidebar_engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sidebar_installation`
--
ALTER TABLE `services_sidebar_installation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sidebar_management`
--
ALTER TABLE `services_sidebar_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sidebar_program`
--
ALTER TABLE `services_sidebar_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sidebar_study`
--
ALTER TABLE `services_sidebar_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station_map`
--
ALTER TABLE `station_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_consultant`
--
ALTER TABLE `about_consultant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_blog`
--
ALTER TABLE `banner_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_engineering`
--
ALTER TABLE `banner_engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_installation`
--
ALTER TABLE `banner_installation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_management`
--
ALTER TABLE `banner_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_program`
--
ALTER TABLE `banner_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_study`
--
ALTER TABLE `banner_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feasibility_blog`
--
ALTER TABLE `feasibility_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feasibility_engineering`
--
ALTER TABLE `feasibility_engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feasibility_installation`
--
ALTER TABLE `feasibility_installation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feasibility_management`
--
ALTER TABLE `feasibility_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feasibility_program`
--
ALTER TABLE `feasibility_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feasibility_study`
--
ALTER TABLE `feasibility_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services_sidebar_blog`
--
ALTER TABLE `services_sidebar_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services_sidebar_engineering`
--
ALTER TABLE `services_sidebar_engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services_sidebar_installation`
--
ALTER TABLE `services_sidebar_installation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_sidebar_management`
--
ALTER TABLE `services_sidebar_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_sidebar_program`
--
ALTER TABLE `services_sidebar_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_sidebar_study`
--
ALTER TABLE `services_sidebar_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `station_map`
--
ALTER TABLE `station_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
