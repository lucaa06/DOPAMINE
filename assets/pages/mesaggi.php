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
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBzX2st9BdyDyNImK7I5TFHRfIJl13v3Dy8wnWrgUv6e_4RkG2Pwww7b6tE4PNUB4mfGz6ba5-73GSk_UacKUp8uXH3PhizJbY8l0zDbTj-zfSDeEd_G67W5Q1yCV7GxQ35rzC2FjWYPQhWhBzpQEUsC3wboASwBJKfBuGvTv142RaaWxXuJgYcTz3TDYyeJ0IZJaAxgAPkMP3_HS_C89LzSPuPHqRsWIgYQfGtobOuLlTit0XqPIW01NEph5qBepM_psA16uEi4DMX");'
                  ></div>
                  <h1 class="text-[#141414] text-base font-medium leading-normal">Sophie</h1>
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
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
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
                  <div class="flex items-center gap-3 px-3 py-2 rounded-full bg-[#f2f2f2]">
                    <div class="text-[#141414]" data-icon="Envelope" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Messages</p>
                  </div>
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
                </div>
              </div>
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-black text-white text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">New Post</span>
              </button>
            </div>
            <div class="flex justify-end overflow-hidden px-5 pb-5">
              <button
                class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-14 bg-black text-white text-base font-bold leading-normal tracking-[0.015em] min-w-0 px-2 gap-4 pl-4 pr-6"
              >
                <div class="text-white" data-icon="Plus" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                  </svg>
                </div>
              </button>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#141414] tracking-light text-[32px] font-bold leading-tight min-w-72">Messages</p></div>
            <div id="messages-container">
              <!-- Messages will be dynamically inserted here -->
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetch('../../backend/messages.php')
                        .then(response => response.json())
                        .then(messages => {
                            const messagesContainer = document.getElementById('messages-container');
                            messages.forEach(message => {
                                const messageElement = document.createElement('div');
                                messageElement.className = 'flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between';
                                messageElement.innerHTML = `
                                    <div class="flex items-center gap-4">
                                      <div class="flex flex-col justify-center">
                                        <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">${message.sender}</p>
                                        <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">${message.message}</p>
                                      </div>
                                    </div>
                                    <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">${message.created_at}</p></div>
                                `;
                                messagesContainer.appendChild(messageElement);
                            });
                        });
                });
            </script>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDHcyxHOHafIfK76Aqt7mLkbVcC4qq-4bpfUAPVIPe1b745Py-uC9DX2FDCxFx290rC9DW9SAUGi0IbsgmCJIHILMjdyqokD17t7ZR0D8hJc94FyoBfkdtDbKBk357IzivylbyUole16klD12xGac7E3r0u2NAcHQlUO37MffL3_y8Nt9tBW5KkiXcT-_8s2GIgsLwoewW_5uuw4C8ytElp7UqLbYsaz6S36HGh-gh1eU849RbQq39bzvRSnnREQExOD6rfKLP_02Wr");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Olivia Bennett</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">I saw your post about the community garden, it's amazing!</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">4h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCstQznmWuJ2k_q4JdTuUFPGoIpFPfPhix1MQAujZkAUIHyERvkIlrWV3hZPgdQK3mwwvqWKYHLfI8RPUsLyPwS5b4tkZypLQl8yuX66nCDSLFmoMgXAfMaP3WA6rpwV_Xu58dogwtlFC7N1f9CuIy8y98A7JUDExPOso3wb5QuEUbZxvnEn8sLmlNi2MOU2Tg6HffWyt_ofUMxgmb8A9tILpqZC3f6yitoBJBKgV-Ui5yeSpXxW7U35iOldJJ7nja29wTEyulhQMBg");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Ethan Walker</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Thanks for sharing that article, it was really insightful.</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">6h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA61BG8xMyHeQBqgvjiNA0QJqr8G9-HomEignAPBINAEB7z9LKYHUr45-e1JUiMaxqiJ3w6ZIhPLz1yhXuGYLinEe38QJig9US3nUH4ayTPnjIQTTONUqAAyS89h1RcKzWm9FrnUbYpcc9dd3JSFsUgxYtBtAwxGwMD1cInoU7Rxl2dMjsNfGmdbh-_w1Vjv7yU4f-0LXVnNFQ4_p6Bca4DSgka8H4L8iJ-pRFzGWSWyL9ZvVGZ9THUwOn3qocbTyh8H-i60_LSdfkn");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Ava Harper</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Let's plan a meetup next week!</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">8h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBCYPABgt-nSizV-COVCtiAa4USBPxHmrlrtYNQEe0kcpU1JCc5RR65TyxYrHr5yJWnJvHF2nCgJaYhzGEUHH6RR5GhG98GWX4eK_MbT--FdeSDKUenUTFLQh7BxIcIwoyqEav2TeiRGU2O6eGp3ZLRycycvkHkxWzNUhTaMZd7fp1yhLA5_YUBUoKtRtE4qNutCWVhC_FqiF8ioyx6grmfozUsIY3GFdthAQkBTb6Z_hLmzB7ROkIgSauvWgWdep4xq67hwBEqKXWr");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Noah Foster</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">I'm so glad we connected through the platform.</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">10h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBHxcNIuuLYTG321cCx3l8o0jKv7NLtLHzWB06WCEBGIPttL650oO_Mazz4d_rgJefHgtzn-DRFShBNHFhKsdb0CCIwntSmAtcQ69sZcylD-KCQxoJCP4330cMyc5bJd5K6TTRND3_LcWHsNv9XSA5DbM9i0wHeQg6iHl_gPt6tzWIlZeU6kGfKDjcgFPt9Cly14C_M9n12OYz2sajj1k_3SEgU0pm5ZOZWK-H6sV6Dndz9SFFnhiDwDQ6NKkSUrSN97G9LSZ1j0tFn");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Isabella Reed</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Your positive vibes are contagious!</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">12h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCsehFuQbCqoR0bhGObaJhiZbGIJM0Pjcgg3oKhFQoyPgfRcB7CW9ddNvHGo-lKX4AB2y26xvZTeCmEq-jJpReoFH4V3Say15ZjMv7yMDrwaqJxU0iQjONpUV45xoEuZG8i1AbgjFi6y8EovDQLjfvZbAuDROZzXonsesAIlEbLjU7C-ppk4Q_Ya_5th2EBIN4bicRTyYfIDKOm_T8tnHJAEwb8VofdfpvdqGZunmSqp65sguGAawIsNyiiEeYUFDvBM3zk7UIFDRVN");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Jackson Hayes</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">I appreciate your support on my latest project.</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">14h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRkWqi588Nb_P4Mo6as_ottyvBFUBORYb_66mdWMZZ9FWJu5phXX54dhC5fmbMBkhLSff_25R7ptizs1D62YMQW0ZirdS77Pd34z_uOFgbvWQqL3zsZnKqioXwLlYVPaGH55cnFXlO5zV060OU1qycHTkKuDEhVi10dpIwF4lL9o77RWfyEgzsnGuAeCj6wIYSflcoR1uPdQexXbZKZ3-X-esOMVE2kHeGYuwytVBV3x1y2DSwTZxrZpDA-pvkj5WJcYcsI64vPZw2");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Mia Coleman</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Looking forward to more positive interactions!</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">16h</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
