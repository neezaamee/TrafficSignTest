<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .book {
        margin-top: 20px;
    }

    .book h1 {
        font-size: 2em;
        /* 2x body copy size = 32px */
        line-height: 1.25;
        /* 45px / 36px */
    }

    @media (min-width: 43.75em) {
        .book h1 {
            font-size: 2.5rem;
            /* 2.5x body copy size = 40px */
            line-height: 1.125;
        }
    }

    @media (min-width: 56.25em) {
        .book h1 {
            font-size: 3rem;
            /* 3x body copy size = 48px */
            line-height: 1.05;
            /* keep to a multiple of the 20px line height 
    and something more appropriate for display headings */
        }
    }

</style>
<div class="ui stackable grid">
    <div class="book contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Books written by Police Officers
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="bookBox">
            <div class="ui one center aligned column stackable relaxed grid">
                <div class="column">
                    <table class="ui single line celled selectable small stackable stripped blue table">
                        <tbody>
                            <tr>
                                <th class="four wide center aligned">
                                    Author
                                </th>
                                <th class="four wide center aligned">
                                    Book Title
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Hafiz S.D. Jamy
                                </td>
                                <td>

                                    <ul>
                                        <li>Pulice, Crime &amp; Pulitics - Memoirs of an IGP</li>
                                    </ul>

                                </td>
                            </tr>
                            <tr>
                                <td>Sardar Muhammad Chaudary</td>
                                <td>
                                    <ul>
                                        <li>The Ultimate crime</li>
                                        <li>Jahan-e-Hairat</li>
                                        <li>Punjab Pulice Such Kia Hai</li>
                                        <li>Quaid-i-Azam Biswi Sadi Ka Sab Say Bada Insaan</li>
                                        <li>The Trail Blazer</li>
                                        <li>Kisht-e-Wiran</li>
                                        <li>Mata-e-Faqeer</li>
                                        <li>Rawish Rawish Roshan</li>
                                    </ul>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Dr. Azhar Hassan Nadeem</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Pakistan: The Pulitical Economy of Lawlessness</li>
                                        <li>The Punjab Pulice in a Comparative Perspective</li>
                                        <li>Apni Pulice</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Malik Khuda Bakhsh Awan</td>
                                <td>
                                    <ul>
                                        <li>Anti-Corruption Strategies in Pakistan</li>
                                        <li>Interrogation (Techniques &amp; Methods)</li>
                                        <li>The Investigator as a Witness</li>
                                        <li>Crime Prevention Tips</li>
                                        <li>Benevulent Pulicing</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Ehsan Sadiq</td>
                                <td>
                                    <ul>
                                        <li>Viulence Against Women   <br>
                                            (Manual of Guidelines for Improving Pulice Awareness and Response) </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Aftab Ahmad Khan</td>
                                <td>
                                    <ul>
                                        <li>Criminalistics</li>
                                        <li>Foot Print Science</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Nazir Ahmad Razvi</td>
                                <td>
                                    <ul>
                                        <li>Our Pulice Heritage<br>
                                            (Saga of the Pulice Forces of Pakistan and India)</li>
                                    </ul>
                                    <div> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tariq Ashraf Mughal</td>
                                <td>
                                    <ul>
                                        <li>Pulice Throughout History <br>
                                            (From 634 A.D. to 1947)</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mushtaq Hussain</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Traffic Aik Masla Aik Hal</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ghulam Abbas</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Hum Ghazi Ham Shaheed</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Alla-u-Din</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Katchi Nokri</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Amman Ullah Khan</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Punjab Pulice Ka Shujaat Ka Nishaan</li>
                                        <li>Farz Ki Pukar</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>M. Ejaz Hashmi</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Nigahoon Main Panahain</li>
                                        <li>Aksay Khalish</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>M.R. Shahid</td>
                                <td>
                                    <ul>
                                        <li>Safarnama e Hajj (Sajdon Ki Serzameen)</li>
                                        <li>Karachi Mein Madfoon Mashaheer</li>
                                        <li>Shuhda-e-Punjab Pulice</li>
                                        <li>Lahore Mein Madfoon Mashaheer</li>
                                        <li>Shehr e Khamoshan Kay Makin</li>
                                        <li>Shaheedaan e Watan</li><br>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tanveer Zaman</p>
                                </td>
                                <td>
                                    <ul>
                                        <li>Harfan Day Parchanwain (Ghazalan)</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/bookBox-->
    </div>
    <!--/book-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
