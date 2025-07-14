<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Public Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-80">
            <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
              <div class="flex flex-col gap-4">
                <div class="flex gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBUnT2_tKyA_D3TqNI36zsMh3O16Ja8Z_0I_DBWga9qPDe60_HbAfPrBi52bVDVoVLdz_HwjuB4nC2lBN5bs6TNWRO4TIV32MZzKvBooc7rJ9ukERk2r74Pf3sNquv75d6om0fkQnS0yw4KX6ugzmwUqS9vZ6In61BZSrULwV-nLReQkm2V0VjCAmfnsJn75mfqnvjgngMSfAg5b2GoCBW-yczS1YkAzjtRR7qNlAWcNUskbsJgqvwphdTlwMrkBcA_ViX54TTJhMG7");'
                  ></div>
                  <h1 class="text-[#141414] text-base font-medium leading-normal">Sophia</h1>
                </div>
                <div class="flex flex-col gap-2">
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="House" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Home</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2 rounded-full bg-[#f2f2f2]">
                    <div class="text-[#141414]" data-icon="MagnifyingGlass" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M168,112a56,56,0,1,1-56-56A56,56,0,0,1,168,112Zm61.66,117.66a8,8,0,0,1-11.32,0l-50.06-50.07a88,88,0,1,1,11.32-11.31l50.06,50.06A8,8,0,0,1,229.66,229.66ZM112,184a72,72,0,1,0-72-72A72.08,72.08,0,0,0,112,184Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Explore</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="Bell" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Notifications</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="Envelope" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Messages</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="ListBullets" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M80,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H88A8,8,0,0,1,80,64Zm136,56H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM44,52A12,12,0,1,0,56,64,12,12,0,0,0,44,52Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,116Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,180Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Lists</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="Bookmark" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Bookmarks</p>
                  </div>
                </div>
              </div>
              <div class="flex flex-col gap-4">
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-black text-white text-sm font-bold leading-normal tracking-[0.015em]"
                >
                  <span class="truncate">New Post</span>
                </button>
                <div class="flex flex-col gap-1">
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="User" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Profile</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="DotsThree" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm56-12a12,12,0,1,0,12,12A12,12,0,0,0,196,116ZM60,116a12,12,0,1,0,12,12A12,12,0,0,0,60,116Z"></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">More</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#141414] tracking-light text-[32px] font-bold leading-tight min-w-72">Explore</p></div>
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                  <div
                    class="text-[#757575] flex border-none bg-[#f2f2f2] items-center justify-center pl-4 rounded-l-xl border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Search"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#141414] focus:outline-0 focus:ring-0 border-none bg-[#f2f2f2] focus:border-none h-full placeholder:text-[#757575] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#e0e0e0] px-4 gap-8">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#141414] text-[#141414] pb-[13px] pt-4" href="#">
                  <p class="text-[#141414] text-sm font-bold leading-normal tracking-[0.015em]">For you</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#757575] pb-[13px] pt-4" href="#">
                  <p class="text-[#757575] text-sm font-bold leading-normal tracking-[0.015em]">Trending</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#757575] pb-[13px] pt-4" href="#">
                  <p class="text-[#757575] text-sm font-bold leading-normal tracking-[0.015em]">News</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#757575] pb-[13px] pt-4" href="#">
                  <p class="text-[#757575] text-sm font-bold leading-normal tracking-[0.015em]">Sports</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#757575] pb-[13px] pt-4" href="#">
                  <p class="text-[#757575] text-sm font-bold leading-normal tracking-[0.015em]">Entertainment</p>
                </a>
              </div>
            </div>
            <div id="explore-posts-container" class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <!-- Posts will be dynamically inserted here -->
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetch('../../backend/posts.php')
                        .then(response => response.json())
                        .then(posts => {
                            const postsContainer = document.getElementById('explore-posts-container');
                            posts.forEach(post => {
                                const postElement = document.createElement('div');
                                postElement.className = 'flex flex-col gap-3';
                                postElement.innerHTML = `
                                    <div
                                      class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                                      style='background-image: url("${post.image_url}");'
                                    ></div>
                                `;
                                postsContainer.appendChild(postElement);
                            });
                        });
                });
            </script>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC3X0_6piMjfmwppYHaiZAJJyuSPC3qzr4ubni3mYJqJ92pBrttwq1SJPdhLfJbXhw3p1VMqZHz6Zc2N1lK8ZcPXLZjBv3JsrLsf8Mo28kNyHZMmwl1tEiLmdn4POOlZEJ4Rk0hGF88IuFspg9UDGJM22ihgdQFYl-eUnHWloPo7oVikwRdHtnDA3l0Oit8z5QQws3yVhgKyHbXBBqCb5FLyw14kS4xSGWNThzNz_N0O_hgnLDR7pGZ4LCMufMzfBbXlgkYntXynmDz");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBMDVBCuqzxSdvbC4o6NpR_SQAVj4av9grgewXI8pYURlC1ZwOY0odzkfPRAYKFwIUgiBQT33knmo0neYwuiq-QRTrxc3gigo4FMgf5SqPhC8fC6qT_-uQfc62l-gwZo9_XcxkSolr_aRgV0-iYVG4GvA4IA5sanSgjXIwgjTPtLhmshzRvKF4NsOJ-QCdRwadXwu975GR9Cpa9E3qZtb_2j32GzdNySr13K6VWs3ZfUkIBspLxGa1lmej0lxWdK_z34ZVan25Lxl6g");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyDxuJfivDQoPNtk0ekgP74UA7i8znpvXhUnKHjK8b9DZF4MxYn14FRVZOL94mgCYYvdJEVGBguUFwzrr7H87RNts0d7ruaeWBY5lVEnW8E2eVoSMRyVXScFB8a7LjJ3sZLJIEdt4P1gPVKZRN9vZW4ZJj5CFGdsQSpwGB1Zz211_dfL-r_NN8avfxs5e-JCPTP6tP9Isy5mt-nisQR4UqRxtEohw-cWCxFt3AB8K_uOAA0HOdZqf8oaxT_wJg_a-eKlrtJp2SdhCP");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuArMuc_cfeDzL-gjEcHbDXp-W_z0RT-pUab4_OWLTMhf15KEd9So95NfakiiL86FzORh5XemEvSKIc7JyJLvliIJE8o6rtfYramRYdc5i2o6y8kGooULx2M-Ic10LzarZfVjia5A_cVSz9IvOX-hdTQgXIiCVcm8H5EV8tgC0WLSHIG4cWhi7BqcdrHCCP7V7MQwE5JWTd2fVqIiWiMd5bYut_c3R9uOZ-tkl63fAqhQw2_T0ezp6Ckj_YWvHFXOcpqgtmYzVmHvRNR");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXLeSTi9-f_aRqmipJ2xYgLrtnAL0KvkQNK9_ZweXD6nmBT6RcGREEztoeLuV3VF9zUuQP3-SlzT0RJ0hKT7CTWOmAQ-dgQGXtS7V3WHogVzeDZ3kXrIkvwsMKX6SetG0sgNxT1q8W57dnC2YJoI1h_9gRV0W9M1p-Mmz2-BS-UvDhWQKuZbudhS1KpX3LTfK-LJPg5AJCV5yEq9mzZolWwhqJWdkBeRF_QJxNpnMwC-XAN7YoPupVU8MoCPLj69keYwTZsUu6Rwel");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAar8p_T0mK_n-vSH2f3l6XjpM3FQQXARtzqhhnCygZq1VQUVPk-SnECrCsv6AGiHeHiQO2naHlhgFqhyO_nIViK-oCfJtTb6tg1oH1oA1kk6EiZofu2VA37dpng00L5F2Ova9GptkZB0waTHJ3LFUYIw-YksDhhEJkYjGwx_keUkQd02naYQ8d9EgBnxOwNFSgHLD6yNH0t1F95gVIZVqLjA8yT8py9iUKv_7cnKSs_8Z8fOyXuAucRoPwFvsTRqmKIGNgJjFVkT3r");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB7p_YkenVDcRy9aLP4CIzDPddRqVAC2KOu_MC7Qbee2bMjCGNTBJVEU_V-3Z3gZtjQFkZwlbaNdBXnyQ_vqkbV03E7MLKgISEURlyjA0IY7tA2cZc53jEhmNe7pdlzmgAad7gD2JCV6UH-pTTKWe9MJwl3IW-0Wz8sXjPtBEgGzBB_D1Or85KJfv1tS8NFT74ZM2bGcucFbtH25-WWDBmS1IxrgMEiouaZvLvoMSGuRAyYUUaXqbmimKvF235mQQe-rJdrh2VQTKpv");'
                ></div>
              </div>
              <div class="flex flex-col gap-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAd5ySa6zKXvHTrGO1Ry4nZ6AhVc6dm7_rxEfEgjM2AhbliWI6bzNwB6qNwD4XmDvWL2yF5jKhNW1Aqq2l31p4iLR_ASHhEfLdDN1hndnPAXwzsWYqm3c-wRHZpH3nl3ORYvpdyqkDCmzGU3yYRhmFrmPHs-FBB-mfeZ6V8TTu7Ujv4o1EPg7vspH97v-32QZISMgX-F9OlkTA_UGjF6WHsL8aeDt1-yAbi7Wj_eN-AYYzLv65J035llgvJd2iCVtziIIou2ImsJAFw");'
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
