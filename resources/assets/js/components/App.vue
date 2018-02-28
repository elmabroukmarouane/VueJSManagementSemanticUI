<template>
    <div>
        <div class="ui blue inverted menu">
            <div class="header item">Brand</div>
            <a class="item" @click="showVerticalMenu()">Veritcal Menu</a>
            <a class="active item" id="link-a" data-content="Add users to your feed">Link</a>
            <div class="ui custom popup top left transition hidden">
                I'm not on the same level as the button, but i can still be found.
            </div>
            <div class="ui dropdown item">
                Dropdown
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Action</div>
                    <div class="item">Another Action</div>
                    <div class="item">Something else here</div>
                    <div class="divider"></div>
                    <div class="item">Separated Link</div>
                    <div class="divider"></div>
                    <div class="item" @click="showModalLogout()">Logout</div>
                </div>
            </div>
            <div class="right menu">
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Rechercher Pays..." id="search_box_ui">
                        <i class="search icon"></i>
                    </div>
                </div>
                <div class="ui dropdown item">
                    Dropdown
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item">Action</div>
                        <div class="item">Another Action</div>
                        <div class="item">Something else here</div>
                        <div class="divider"></div>
                        <div class="item">Separated Link</div>
                        <div class="divider"></div>
                        <div class="item" @click="showModalLogout()">Logout</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="ui left demo vertical inverted sidebar labeled icon menu">
            <a class="item" href="javascript:void(0)">
                <i class="home icon"></i>
                Home
            </a>
            <a class="item" href="javascript:void(0)">
                <i class="block layout icon"></i>
                Topics
            </a>
            <a class="item" href="javascript:void(0)">
                <i class="smile icon"></i>
                Friends
            </a>
        </div>
        <br>
        <div class="ui column two stackable grid">
            <div class="one wide column">
            </div>
            <div class="left aligned fifteen wide column">
                <div class="ui breadcrumb">
                    <a class="section">Home</a>
                    <i class="right angle icon divider"></i>
                    <a class="section">Store</a>
                    <i class="right angle icon divider"></i>
                    <div class="active section">T-Shirt</div>
                </div>
            </div>
        </div>
        <br>
        <div class="ui column three stackable grid">
            <div class="one wide column">
            </div>
            <div class="fourteen wide column">
                <h4 class="ui top attached block header">List Items</h4>
                <div class="ui bottom attached segment">
                    <div class="ui top attached tabular menu" id="tab_list_ui">
                        <a class="item active" data-tab="tab-list">List Item</a>
                        <a class="item" data-tab="second">Second</a>
                        <a class="item" data-tab="third">Third</a>
                    </div>
                    <div class="ui bottom attached tab segment active" data-tab="tab-list">
                        <div class="ui column stackable grid">
                            <div class="right aligned column">
                                <div class="ui primary buttons">
                                    <div class="ui floating dropdown icon button" id="actions_dropdown">
                                        <span class="text">Actions</span>&nbsp;&nbsp;
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <div class="item" @click="showModalForm()"><i class="add icon"></i> Add</div>
                                            <div class="item"><i class="edit icon"></i> Edit</div>
                                            <div class="divider"></div>
                                            <div class="item"><i class="delete icon"></i> Remove</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <table id="table_list" class="ui very basic center aligned table" style="border: solid 1px #EEEEEE">
                            <thead>
                            <tr style="background-color: #2196f3;">
                                <th style="color: white;">Name</th>
                                <th style="color: white;">Position</th>
                                <th style="color: white;">Office</th>
                                <th style="color: white;">Age</th>
                                <th style="color: white;">Start date</th>
                                <th style="color: white;">Salary</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr style="background-color: #2196f3;">
                                <th style="color: white;">Name</th>
                                <th style="color: white;">Position</th>
                                <th style="color: white;">Office</th>
                                <th style="color: white;">Age</th>
                                <th style="color: white;">Start date</th>
                                <th style="color: white;">Salary</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="second">
                        Second
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="third">
                        Third
                    </div>
                </div>
            </div>
            <div class="one wide column">
            </div>
        </div>
        <br>
        <div class="ui column two stackable grid">
            <div class="one wide column">
            </div>
            <div class="left aligned fifteen wide column">
                <footer>
                    <p>&copy; Copyright 2018. Marouane EL MABROUK.</p>
                </footer>
                <br>
            </div>
        </div>
        <!-- Begin Modal Form -->
        <div class="ui fullscreen modal" id="form-modal">
            <i class="close icon"></i>
            <div class="header" style="background-color: #2196f3; color: white;">
                Update Your Settings
            </div>
            <!-- <form class="ui form segment"> -->
            <div class="content">
                <!-- <div class="ui error message"></div> -->
                <div class="ui form">
                    <div class="required field">
                        <label>First Name</label>
                        <input name="first-name" placeholder="First Name" required type="text">
                    </div>
                    <div class="required field">
                        <label>Last Name</label>
                        <input name="last-name" placeholder="Last Name" type="text">
                    </div>
                    <div class="required field">
                        <label>Feedback</label>
                        <textarea name="feed-back" placeholder="Feed Back"></textarea>
                    </div>
                    <div class="required field">
                        <div class="ui toggle checkbox">
                            <input tabindex="0" class="hidden" type="checkbox" checked="checked" name="contact-me">
                            <label>It's okay to contact me.</label>
                        </div>
                    </div>
                    <div class="required inline fields">
                        <label>Select your favorite fruit:</label>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input name="fruit" checked="" tabindex="0" class="hidden" type="radio">
                                <label>Apples</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input name="fruit" tabindex="0" class="hidden" type="radio">
                                <label>Oranges</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input name="fruit" tabindex="0" class="hidden" type="radio">
                                <label>Pears</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input name="fruit" tabindex="0" class="hidden" type="radio">
                                <label>Grapefruit</label>
                            </div>
                        </div>
                    </div>
                    <div class="required field">
                        <label>Gender</label>
                        <div class="ui selection dropdown" id="select_dropdown">
                            <input name="gender" type="hidden">
                            <i class="dropdown icon"></i>
                            <div class="default text">Gender</div>
                            <div class="menu">
                                <div class="item" data-value="1">Male</div>
                                <div class="item" data-value="0">Female</div>
                            </div>
                        </div>
                    </div>
                    <div class="required field">
                        <label>Country</label>
                        <select multiple="" class="ui dropdown" id="select_dropdown_multiple">
                            <option value="">Select Country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="actions">
                <div class="ui red cancel button">Cancel</div>
                <div class="ui green submit button">Submit</div>
            </div>
            <!-- </form> -->
        </div>
        <!-- END Modal Form -->

        <!-- Begin Modal Logout -->
        <div class="ui basic modal" id="logout-modal">
            <div class="ui icon header">
                <i class="archive icon"></i>
                Archive Old Messages
            </div>
            <div class="content">
                <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
            </div>
            <div class="actions">
                <div class="ui red cancel inverted button">
                    <i class="remove icon"></i>
                    No
                </div>
                <div class="ui green ok inverted button">
                    <i class="checkmark icon"></i>
                    Yes
                </div>
            </div>
        </div>
        <!-- End Modal Logout -->
    </div>
</template>

<script>
    export default {
        mounted() {
            this.initComponents();
            this.getData();
        },
        methods:{
            initComponents() {
                $('.ui.menu .ui.dropdown').dropdown();
                $('#actions_dropdown').dropdown();
                $('#link-a')
                    .popup({
                        popup : $('.custom.popup')
                    });
                $('.ui.checkbox').checkbox();
                $('.ui.radio.checkbox').checkbox();
                $('#select_dropdown').dropdown();
                $('#select_dropdown_multiple').dropdown();
                $('.menu .item').tab();
            },
            showVerticalMenu()
            {
                $('.ui.labeled.icon.sidebar')
                    .sidebar('toggle');
            },
            getData() {
                Vue.nextTick(function () {
                    Event.$emit('init-datatable', 'table_list');
                });
            },
            showModalLogout()
            {
                $('#logout-modal').modal('show');
            },
            showModalForm()
            {
                $('#form-modal').modal('show');
            }
        }
    }
</script>
