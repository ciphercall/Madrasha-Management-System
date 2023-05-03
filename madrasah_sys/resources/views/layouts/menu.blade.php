<!-- <li class="nav-item menu-open">
            <a href="{{ url('/home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
    </a>
  <ul class="nav nav-treeview">

  </ul>
  </li>

  
<li class="nav-item">
    <a href="{{ route('members.index') }}"
       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
       <i class="far fa-circle nav-icon"></i>
        <p>Members</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('padusages.index') }}"
       class="nav-link {{ Request::is('padusages*') ? 'active' : '' }}">
       <i class="far fa-circle nav-icon"></i>
        <p>Padusages</p>
    </a>
</li> -->

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt pr-2"></i>
                  <p>
                    ড্যাশবোর্ড
                  </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}"
                class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-alt pr-2"></i>
                    <p>এডমিন</p>
                </a>
            </li>



<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-alt pr-2"></i>
        <p>সফ্টওয়্যার অ্যাক্সেস</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('members.index') }}"
       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-alt pr-2"></i>
        <p>তরিক্বত পন্থী তালিকা</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('centralmembers.index') }}"
       class="nav-link {{ Request::is('centralmembers*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-alt pr-2"></i>
        <p> কেন্দ্রীয় পরিষদ তালিকা </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('guestmembers.index') }}"
       class="nav-link {{ Request::is('guestmembers*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-alt pr-2"></i>
        <p> মেহমান তালিকা</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('volunteers.index') }}"
       class="nav-link {{ Request::is('volunteers*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-alt pr-2"></i>
        <p> অনুন্ঠান কর্মী তালিকা </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('brunchs.index') }}"
       class="nav-link {{ Request::is('brunchs*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-building pr-2"></i>
        <p>শাখা তালিকা</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('qurankhatams.index') }}"
       class="nav-link {{ Request::is('qurankhatams*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-book-open pr-2"></i>
        <p>কোরআন খতম তালিকা</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('invitations.index') }}"
       class="nav-link {{ Request::is('invitations*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-edit pr-2"></i>
        <p>  দাওয়াত তালিকা</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('invitationcenters.index') }}"
       class="nav-link {{ Request::is('invitationcenters*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-edit pr-2"></i>
        <p>কেন্দ্রে জমা দাওয়াত</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('mahfils.index') }}"
       class="nav-link {{ Request::is('mahfils*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-mosque pr-2"></i>
        <p>মাহফিল তালিকা</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('donationboxes.index') }}"
       class="nav-link {{ Request::is('donationboxes*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-donate pr-2"></i>
        <p> দান বাক্স তালিকা</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dboxwithdrawals.index') }}"
       class="nav-link {{ Request::is('dboxwithdrawals*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-donate pr-2"></i>
        <p> দান বাক্স উত্তোলন</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('complexs.index') }}"
       class="nav-link {{ Request::is('complexs*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-donate pr-2"></i>
        <p>কমপ্লেক্স</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('depositcenters.index') }}"
       class="nav-link {{ Request::is('depositcenters*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-donate pr-2"></i>
        <p>দান বক্স ও কমপ্লেক্স বাবদ কেন্দ্রে জমা</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('fazleahmadis.index') }}"
       class="nav-link {{ Request::is('fazleahmadis*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-book-open pr-2"></i>
        <p>ফজলে আহমদী </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('incomeaccounts.index') }}"
       class="nav-link {{ Request::is('incomeaccounts*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-edit pr-2"></i>
        <p> আয় হিসাব</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('expenseaccounts.index') }}"
       class="nav-link {{ Request::is('expenseaccounts*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-edit pr-2"></i>
        <p>ব্যয় হিসাব</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('padcollections.index') }}"
       class="nav-link {{ Request::is('padcollections*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-book-open pr-2"></i>
        <p>প্যাড সংগ্রহ</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('padusages.index') }}"
       class="nav-link {{ Request::is('padusages*') ? 'active' : '' }}">
       <i class="nav-icon fa fa-book-open pr-2"></i>
        <p>প্যাড ব্যবহার</p>
    </a>
</li>








