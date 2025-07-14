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
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCivlsoegBWTcJLGmG3wf0UWmydoAQLIxdJRjTAey883WLswDxIJlVS9CsmqpYgtBRrgtW9MgEBJQccvWcTP141E2Ni_JGzCI5bbCYUCS9h5vyF4D5kbKm6TnLz04gdGqrEqLA-dpI2--pxWD0RlV6kc_MsUyqCmtCGy-kupiEEZRhvV7yntC3-V2qdf3EoeAw3MBzOR9BqkCgRPueS4OE2veQfaW9nzOCWN5XHsBe0k9GIXlyIoH69Ll-M-QzrT3vbxFzCMeMUbfNH");'
                  ></div>
                  <h1 class="text-[#141414] text-base font-medium leading-normal">Olivia Chen</h1>
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
                  <div class="flex items-center gap-3 px-3 py-2 rounded-full bg-[#f2f2f2]">
                    <div class="text-[#141414]" data-icon="Bell" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"
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
                <span class="truncate">Post</span>
              </button>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#141414] tracking-light text-[32px] font-bold leading-tight min-w-72">Notifications</p></div>
            <div class="pb-3">
              <div class="flex border-b border-[#e0e0e0] px-4 justify-between">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#141414] text-[#141414] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#141414] text-sm font-bold leading-normal tracking-[0.015em]">All</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#757575] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#757575] text-sm font-bold leading-normal tracking-[0.015em]">Likes</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#757575] pb-[13px] pt-4 flex-1" href="#">
                  <p class="text-[#757575] text-sm font-bold leading-normal tracking-[0.015em]">Follows</p>
                </a>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBsiVsBBGDzf5JEJgpHK2-3ByZsKa3zCbV29BLTojBOTgM9wSNZ1FgVtozKP6vgxyMVwAVjqvUtQVbBKICBbtZgSRl0ZIRqHVlN1gRsYdoMWAzrVzsetbfiwSzljAGpEEYd06U6RzAli7oOia_uRyoH6gEv2nqEf5JTRFTIcdFNojDjPIyhDOcDGAUcGlSJ8rEw4OUu4XX-uH9cNH1ofcXLNzNhC_JC4gQFbWjRN5LYNXfe6Ng7kroctRVS57mKxG-RbnXAfoBtBJOv");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Ethan Walker liked your post</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">2 mutual friends</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">2h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB3geurjx3rnfWaA4lVxQ22x-fiFa5GeAtsM13H7UyZf0S364l8Z4TC2Vdto6UbStJVGvr09LRLpj8fLA9dfEkL7EgwwaC2NdgMHM7wBaaKGOemJeU0E-5fgYG3tCcUUDqB2BcsXXwETfpWuNRXMUMHwQoNJmrPgxCi6te4_mGaWvDZ6QsIwQNJoQc0f6a0bq0i7Ew4_muo7dXcg0MoZfn93hwHRxUwjcZvh-nJ_2LeIx_y0J-7vIeAbYvPWnwRr-c1ZwmhKKUsETAV");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Sophia Lee commented on your post</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Great job on this!</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">4h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC54ZJ_70ztQe9Uja01kCr0E4wQGbJPTaBTe3gGW1LCbbLn-LhMQCl6fuc_pj0QLoPfXBNiGZZ1IjCCqpmnf-PfCV7QWL8m1c_UzMZaZnvBhHH5TIKYh3bKuQVwwlphwimQKn0dkbaN3wIPm4KbfNybajx9N1XUek8Bjckk18dJz9gsktimldePuhOU1E35aNbuMFGi_NEOQoRwzbMqJznJn_az8mdebub1HKF5Hzn720IYhldLqIrFwnrXTWCHzbSs13QikqOhvyN_");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Liam Carter started following you</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">1 mutual friend</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">6h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDm2FS37l1gfINBAkQNMtIYL2TMQ_7KwSwxEBrVWYyh7mNS7ab084K1sGqIRrmlsVSBY-Q5_6fFUlDPbA3YC_G0_YnPAiKQv8OJaTboqlCSRfHi3h19Ukxvc7UU50nPUk9ao6ISyqRkIUnTUYgY-VAvOzPU3ZSZ3Rwg3io-yOUbKK04J9j6P0vu2GRrI5otG6AG_lJhx2RfzGw0A5Yi8FYUTXblmntDk8Lsr1hVdpVLxuXvN-tbY69EALZuzKAo-R1kjas-696JQBFv");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Ava Harper liked your comment</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Nice point!</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">8h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMnI4caX_I3uWxerTFih0nekGjecyHrJZUzdiAZ5QBs5NjrIRcW6JvMYpXWwWKuKT4zCgjFkpO6OfHGjwFPfJ9LAX6Qhdgv4K_DbL6HBTEoN9PI9bqVyX-4xIzZtSOTzQxFbG6OAFYHB6J6BD2Wok4Am3A2LdOzMg-j540xgqdCFOWxpL5OcCCLdPBArtP1tRQqULFHMuuAFd9U1K6FcUn7D_vjaaRU59bdkk10b0vPGK7sw24wySzB-PUyvr2m5GEaUiqEnR4Iy7y");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Noah Bennett mentioned you in a post</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">Check this out @OliviaChen</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">10h</p></div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAg4YNC8Hmz9di6eRPuv2HAzch7IE6KqubJA5mXa5xK1yI4Ky2kGxrxfSWwiDIrMvzYhK-QZwKi2MsJ9vo6As--XHAAr2UFBRKfUfij5nIhJEyGd5evJ0rNEPptffxw68VN-MW0DAq_wO5DryueAlVHM2Ty1HVTnX9dak_furkiDLeH-XU9tkCC9TV4LZUT-KZTqsgS6JKYn2jkF_KQ6HfGbxyPOHr_w8FWs8uLkOnu41Fd9CZrucG6f6VLgt_JP5SjKhHd7JUAbUri");'
                ></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#141414] text-base font-medium leading-normal line-clamp-1">Isabella Reed replied to your comment</p>
                  <p class="text-[#757575] text-sm font-normal leading-normal line-clamp-2">I agree with your thoughts</p>
                </div>
              </div>
              <div class="shrink-0"><p class="text-[#757575] text-sm font-normal leading-normal">12h</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
