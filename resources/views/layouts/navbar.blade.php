    <style>
    .header {
      width: 100%;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    

    .header .btn-back {
     margin-left: 10px;
      background-color: #fff;
      border: none;
      padding: 5px 10px;
      font-size: 14px;
      border-radius: 5px;
      font-weight: 500;
      cursor: pointer;
    }

    </style>
    
<nav class="header-nav ms-auto">

<nav class="header-nav ms-auto">
  <div class="header">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin: 0;">
      @csrf
      <button type="submit" class="btn-back">Logout</button>
    </form>
  </div>
</nav>

</nav>
