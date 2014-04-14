<?php

$base64ImgArr = array();

$base64ImgArr[] = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQQEhQUEBQUFRQWGRURFhUXFBcYFhUYFxocGBYZFRgYHCggGBwmHhUWITEhJSkrLi4uGCAzODMsNygtLisBCgoKDg0OGhAQGiwkICQvLCwvLy8sLSwvLCwsNCwsLC8sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAMMBAwMBEQACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABgEDBAUHCAL/xABMEAABAwIDAgcKCwgABQUAAAABAAIDBBEFEiEGMQcTIkFRYXMUMjM1VHGBlLLSFhcjJFNykZOxs9QVJTRCUqHB0QhiY5KidILE4fD/xAAbAQEAAgMBAQAAAAAAAAAAAAAABAUDBgcCAf/EADgRAQACAQIDBAgFAwMFAAAAAAABAgMEEQUhMQYSQVETFDM0YXGBoTKRsdHhFiLBI1LwFUJTYnL/2gAMAwEAAhEDEQA/AO4oCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIKEoKoCAgICAgICAgICAgII7whzOZhlY5jnNc2GRzXNJa5pA0II1BQa6l2GhLGF1TX3LWk/P595F/6kF34CQeU1/r8/vIHwEg8pr/AF+f3kD4CQeU1/r8/vIHwEg8pr/X5/eQV+AUHlGIev1HvIHwCg8oxD1+o95A+AMPlGIev1HvIHwBh8oxD1+o95A+AMPlGIev1HvIHwBh8oxD1+o95A+AMPlGIev1HvIHwBh8oxD1+o95A+AMPlGIev1HvIHwBh8oxD1+o95A+AMPlGIev1HvIHwBh8oxD1+o95A+AMPlGIev1HvILFfsNCyKRwqMQu1jnD5/PvAJH8yCSbPPLqWnLiSTDESTqSSwXJKC5jFSYoJpG2zMjkkF912tJF+rRBBvhBiUOHsxGV9JLEYYqp8DYpIn5HhriGyGRwLgHc7dbIJfie0lLShndNRFCXjM0SPDSR02OqDIqMYgjh4980TYbBwlL25CDus69ig+MJx2mq2udTTxShujix4dl+tbcgs0G01JUScVDUwSSa8hsjS7k99YA626kGlbidbWVFUykkp4IqaQU5dJE+Z8j8jXuNg9gY0Z7c90G7wmeoZHJ3eYQYyflY7tjfGGh2ctcbx2u4EEnvb31QRzAtr6iqxCNgjayimhmlgc4HjZRE5jeN6Gsdn5LSL2APOgnKAgII1wk+Kq7sJfZQQzh48TwdtB+VIg878Yek/aUDjD0n7SgcYek/aUDjD0n7Sg3WG7YV1MQYaqdtgAAZHObYbhldcW0GiDsvBrwv8AdUjKbEA1srzljmbZrHnmbICeS47gRoSQLIOwAoKoCAgICAgICAgIMXFfAS9m/wBkoMfZr+Dpuxh9hqBtJ/CVPYzew5ByuuwynbglNMayXjWQU00cD6kyQyytY1zYe53EhwJFsoAt6EEtq6+SWsdFTx0sE4p4JJp6hpe7K8vyMijBbmDTnuS4AE7igj2B4e2SigaamKKWLEKt0DpGAwSvD5QW8XmAsWueQAdOZBlYniErm4pTSx0zqgYe+UVFIHAOYRI1sUrSSWyXzOAudHILuF0jpG4a6oqaBsET4H07aeNwkleWZGMBc82FnXIaOY7gCgrgWD009bijatxLxUh7YTO9jQx0UZbIGNcL5rWzG/eiyDGpsPqKyCrpaKVklNHWta0zyyObJTtY18tO2Voc5zeMOXn5OYXQZje7hjFEJ2UbbU9QLRSSkCMOizWzMHK70Abt/RqHR0BAQRrhJ8VV3YS+yghfDz4ng7aD8qRB52CD0BwZcG+HVmGU09RAXyvEhc7jZW3tK9o0a4AaNAQSf4ocJ8lP303voMas4GMLktliljtfvJna+fPm/tZByLhL4MZMJAmicZaZxy5yAHxu5mvA0N+Zw82mlw5+Ha9CD1pwWbQHEMOhleQZGgwyWNznj0u4cxcMrrf83WglqAgICAgICAgICDFxXwEvZv8AZKDH2a/g6bsYfYag2EgFjmtaxvfdbnv1INFSYThsLw+GGhjeNz2RwNcPM5ouEGbimBUtXlNTTwTZe9MkbHloPMC4aDdogHAKXieI7mp+Ivm4niWcXe975LZb31vZBcwvB6elaW00MULSbuEcbWBx6XZRqfOgsUezVHDJxsNLTsl1PGMhY1+u+zgLi6D6xTZ+lqiDU00ExboDJEx5A6ASLgdSC/hZgEeWl4oRxl0WWINDGOYbOZZujSDcEcyC8+lYXtkLGmRoc1ry0ZmtdbMA7eAcouOoILyAgII1wk+Kq7sJfZQQvh58TwdtB+VIg86oPVvAx4mo/NL+dIgmyAgjXCVC1+F1oeA4CCV1juu0ZmnzgtB9CDyENUHpD/h18WSf+pk/LiQdSQEBAQEBAQEBAQYuK+Al7N/slBj7NfwdN2MPsNQNpP4Sp7Gb2HIIBsdTUL6SjD8Le95hpw6U0bC1zixt3l53gnXMfOglOIY3U92uo6SKA5YI6kySyPaAHvewNDWsN+833G9BijbN7aOeaWnHdEE4onQtkux0znsYzLI5o5B4xhvbTXfZBsKDEK1j/ntPCI+LfJxkErn5HMscj2vaCbi9nA7xa2qDTO2urBRjEDTQdy5BOYxM7jxCdc1yzIXZTfL6LoNpX47UOqnU1FFE4xxMnkkmkc1vyhcI2tDWk3ORxJO7TegjOz20EtLSyO4hpqajEp6ZkJlsxssjiTmly3LWhjjcNubDTVBIqHaOYVE9NVRxCSOn7sY6GRzmObctLXhzQWOuOu4PUgbL45W1baeaSngbTzs4y7JnOkiu3MzOHMAcDoNNxI3oJUEFUEa4SfFVd2EvsoIXw8+J4O2g/KkQedUHpDgp2zoKbCqWKeqhjkaJczHPs5t5XkXHmIPpQSz4wsM8up/vAgxq3hNwuIAurInAnLyMzz6QwE203oORcJ3CycQjNNRB8cBsZHuNny2vybDvWd6ek26N4cwpKV8sjY4mue95DWtaLlxO4ABB672B2e/Z1DBT6Z2tzSEbjI7lPt1XNh1AIJCgICAgICAgICAgxcV8BL2b/ZKDH2a/g6bsYfYagvYxTGWCaNtsz45IxfddzSBf0lBGdn566lpaendQFxhiigLhVQgExsDSRzgGyDY0+FSDE5akgcU+lhgBuL52SPc4W32s8aoNHV7LVD4K9rQwSSVra6AF3Je2N0TwHEd7cxlu7RBuoaqrqSY5KXuaItka975WPcSW2aI2x30ublxI721tdAjbsLrnYYMM7lAdxLaQ1PHM4nKLNMgHfnki+XLvQbmeiqKWukqIYO6I5oIICGyMZIx0Ln2JDyAWkScxuLINFVbI1E9L8rBE57cQkxE00j2ubLE/ODHn1aHWk59Lt9KDc7PYU6MTMhw+KhhfE9pGaMySSnRt+LuA0DNqSTruQbjY3D301DSwzACSKGON4BBAc1tjYjeg3SAgjXCT4qruwl9lBC+HnxPB20H5UiDzqgICCqCiCc8F+2cGFTF09K2XNpx48NE06HIHHKR5rHfqg9N4Hi0VZCyemeHxPF2uF+bQgg6gggggoM9AQEBAQEBAQEBBi4r4CXs3+yUGPs1/B03Yw+w1BskBAQEBAQEBAQEBAQRrhJ8VV3YS+yghfDz4ng7aD8qRB51QeoeB/CYJMHpHPghc4iW7nRsJPy0m8kaoJl+w6byeD7ln+kFir2Zo5W5ZKWnc3Q2MTOb0IOe7a8C9NNG9+HN4icAuEeYmKQ3vblE5OcC2g00QeeJYy1xa4FrgS0gixBGhBHMepB1f/h+2mfDVmjc4mKdrnMacxyysF7tA0F2h17270a8xD0SEBAQEBAQEBAQEGLivgJezf7JQY+zX8HTdjD7DUGyQUugqCgICBdAQEBAQEBBGuEnxVXdhL7KCF8PPieDtoPypEHnVB6t4GPE1H5pfzpEE2QEFCEHlDhep2R4vWCM3Bc15tbRzmNc4adDietBi8GM7o8Voiw2JmYy+nev5Lhr0hxCD1ygIKoCAgICAgogqgxcV8BL2b/ZKDH2a/g6bsYfYagzqiIPa5puA4FpsSDqLaEbkEKpdopIsJmc52eqpjJQHMRmfUMdxURPW/NG7rD7oPl+1TqGKVgY2ZlC2OOokkqcs0j+La9xijLTxjjm/mc250F0G6mx2c1MkMFO2RsPEmRzpsjrS3PybMhDiA0kgub50FjCNqJKqT5KGIw8Y+EkVLTUMyOLC6SDJZrbtvbOXWI06As0e0h4qIQROklnnq4GNlmIaDBJLxjnyZXFrPk9AGki7R1oPqXa97I5hJABUQz09I+Nst4y6p4vi3NlLAS20rb3aCLHTpDYYLjUkk8tNUwtimjZHN8nKZY3MkLmtIcWMIN43Agt6EG8QEBAQRrhJ8VV3YS+yghfDz4ng7aD8qRB52CD1ZwMeJqPzS/nSIJsg+XvDRdxAHSdB9qCFbdcJNLhsT8kkc1T3rIWuBs7pkynktHPzn0oPM0rJq2aSUjM57nSPduF3G583mWPJlrj6ymaTQZ9VbbFX6+CT7FQHD6uKqcA90eYhnMS5pbqbaWvdRLa6PCGw4ey15j/UvtLqreFl19aYW5/lNbf9q8+v/wDqyT2Tnb2n2b7B+EilncGvzwuJsM9sp6OUDp6Vnx6vHbl0Vmq7ParBWbRtaPh+yaNcDuUrqodn0gICAg1uPYxHRwvmlPJbuAtdxO5rb868ZLxSu8pOk0uTVZYxY+soV8bMPk8v/c1Q/XqeTYv6Uz/74+6c4HiQqoI5mtLRIMwaTcjW2tvMpmO/frFmuavTzp81sUzvsuYr4CXs3+yV7R2Ps1/B03Yw+w1BsSgi9VsiJKwT8YRCXsqZKcAZZKiJuSKQnoAIJb/VGw8yDGrdkpO6Zp6c0eaVwkD56XjZYHhjWEwvD26EMBAO433jRBvqDCjHU1E5fm45sDctrFvFBwJJ575uhBoqjZSaaoikmdSfJStnbNHTFlU4MdmEZkzkAGwa4gcoXFhdBcj2TlibAYZmcbBPVVDS+Mljm1L5HOY4BwcCBKLOB3tvYjRBQ7JSSCV0srOOmqaSreWMIjApjFlY0OcSbthsXE7zewGiDdQ4UW1klTm0fDFBktqDG+R9731B421urrQbRAQEBBGeEg/uuu7CX8EEM4efE8HbQflSIPOqDKhxGVgDWSyNaNwa9wA59ACg+/2tP9NL94//AGg+JcSmcC10sjgd4L3EHzglBcwqiMzw0aAauPQFizZYx13lYcN0NtZmjHHTxlM4YgwBrRYDQBUt7zad5dMwYKYMcVxxyhucA2cqK4kU7LgaF7jlYOq/OdRoLr3iwWyTyRddxTT6SP755+Xi3WL8HNXA3MzLM0AXyGzh08k7xu3dO5Zb6O9Y3V+k7SabNPdvE1+fRD1F5wv4nvRvDpXBVtM7P3JM4uDruiLjctI1LBfWx1PoKsNHmmZ7ktO7RcMpWPWccbef7uqAqxaeqgIPl5sE32IjeXDuELac1s2SM/IREhm/lu3F5B+wdXnVRqc05Ld2OjonAuGxpcPpLx/fb7R5ImojYJd/2B8X031P8lXmn9lVy7jHv2X5ttivgJezf7JWZWMXZs/NKbsYfYagv4m6TipOJ8IGks3auGoGumu70oI3iRfPYSRPbnLnMlMMj3wMzANDGxtOSU2LsziMtxe9iAGwqMvdsEjY5L5Jo3v4mS2pYIw52WwHJed9he/PqG+ugXQLoK3QUugrdBS6Ct0C6CMcI5/ddd2Ev4IMjGtmYMTpYoasOdGOLlAa8tOYMLRcjms46II78S+FfRS/fP8A9oHxL4V9FL98/wD2gfEvhX0Uv3z/APaCnxMYV9FL98//AGj5u55tbg1NRVLoKNmVjA0OJcXOc48o5iegEC3UqnWX719nQuzOn7ml9JPW0/Za2cwd1bURwsNs2rj/AEsHfHz2/usGHHOS2y04jrq6TBOWevh83oDDaFlPG2KIBrGgNAH4nrV3WsVjaHLs2W+bJN7zzllEL0xOL8KmDCnqhK3Rs4L7cwe2wdbz3B9JVTrMUxfePFv/AGb1sZNP6O0868vpKOYBxjKiCSNrtJGHMGkjvgDcjm5isOGLReJiFrxG+G2nyUvaOkvRYV3HRyx9L6KFBz3hR2oEUZpYj8pIBxhH8sZvputd1reZQ9Vn7sd2Gy9nuGTmyenvH9tenxn+HI7Kpb7Ani9S7/sB4vpvqf5KvNP7KrlvGPfsvzbbFfAS9m/2SsytYWzh+aU3Yw/ltQbG6BdAugXQLoF0C6BdAugXQLoF0EY4RT+667sJPwQSXD/BR/UZ+AQZCAgIKFCXm/HKoy1EzzflSPOpuQL6C/ULD0Khy23vMusaHFGLT0r5RCfcDVCLzzkG4yxNPNrynWPPuapuhrtvaWr9qs3PHhj4zP8AhNMS2vo6ckSTszDQtac7hrbc2/R6FLtnpE85a9g4Xq80b0pO35MD4xqD6V33b/8AS8etYvNK/wCga7r3PvDdUGJ01YCYpI5cuhsQSPQdQs1clL9JV+bTZ9NO2Ss1bCOMDQAAdAFh9i9bRCP3pnq+7L6+CDTbU48yhgdK8i/exsvq9/MB/nzLHlyRjrvKZoNFfV5q46/X4Q4DWVTpnvkkN3vJe49Z/wD1vQqS15tMzPWXUcOGmGkUpG0RyS2k2VEeFz1U7flHNYYgd7G5xyhY73A/YpUYIrhm1urX8vFZycSx4Mc8omd/jy/whahNnl3/AGA8X031P8lXmn9lVy3jHv2X5ttivgJezf7JWZWtds6fmlN2MP5bUGxugXQLoF0C6BdAugXQLoF0C6BdBGeEQ/uyt7CT8EEow/wUf1GfgEGQgICDGxF9opCdLMcb9GhXy34Ze8Ub5Kx5y80grX5l1+teWzZU+OTRwGnjeWRucXuy6OcTbQu325P917jLaK92ELLw7Fk1Hp7xvMRtDWrx1TY2qFfZiY8HyLxMcl2mqHxODo3OY4bnNJBHpCVvNZ3hjzYMeas1vWJh2Xg/2x7tbxU2k7G3Nt0g0GYdB11CttPqO/G09XP+M8InSW79OdJ+yaAqUonxK8NBLiAALkncAN5SZIrNtohwbbbaM11QS0niWXbEOkc7iOknXqFgqbU5vSW+EOlcG4b6pg3t+Kev7PvYXZs11QA4HiY7OkPMehgNrXPR0XTTYfSW3npD5xniUaXBtH47co/f/ni6lwgsDcMqAAAA1gAGgAD22ACstT7KzTOCzM6/HM+c/pLhCpHTpd/2A8X031P8lXmn9lVy3jHv2X5ttivgJezf7JWZWtXs6fmlN2MP5bUGwugXQLoF0C6BdAugXQLoF0C6BdBGuEI/uyt7CT8EErw/wUf1GfgEGQgICDVbVfwVV2MvsFY8v4JS9B71j/8AqP1edVQuswy8Kw99TKyKIXc8gDfYDnJtzDnXvHSb2isI+s1VNNhtlt0h2/ZrY6no2CzBJIbZ5Hi5J0vlB70XG4K4w4KUj4uba7i2fVXmZtMR5R/zm2GM4DBVsc2aNrr/AMwFnAjcQ4agr3bHW8c4RdPrc2nvF8dp5eDhu1eAuoKh0TrlvfRuP8zT/kbj5utU+fFOO2zpHC+IV1eCMnj0mPJiYLXmmqIph/I9rj1i/KHpFwvOK80tEs+u0/rGnvinxjl8/B6OjcCAenX7VfOUWjaZifBzThV2ot8zhdroZnA7hvazQ/aOiyr9Zm5dyG19nOGd+3rOSOXh+7mtJTOme2OMFz3kMaBfefNzc/oKr61m0xENxz5aYsc3vyiHf9lMDZQ07Ym2zd9I7+t53nzcw6ld4scY67Q5fr9dbWZ7ZLfT4Qw+EbxdU/VZ7bV41PsrJHA/fsXzn9JcGVK6fLv+wHi+m+p/kq80/soct4x79l+ba4r4CXs3+yVmVrUbPH5pTdjD7DUGfmQMyBmQMyBmQMyBmQMyBmQMyBmQMyCN8IJ/dlb2En4IJfh/go/qM/AIMhAQEGHi0YfDK1wuHMe0jpBabrzeN6yy4LTXLW0eExLzYNyoJ6uu15w6BwOUrXVMsh3xxgN3fznU+ezbekqdoaxMzLVe1WWYxUpHSZ3/ACdfVm0cQc84ZKHNBDKBqx+Qm/8AK8f31AULXV3pu2fsvn7uotj84/RyMqqb3Pk77FVOhwxsjLZmUrXtvuu2IEXV73tsfe+Dlvooy670c9Jtt93BZpnPcXPcXOccznE3JJ5yqO1pmd5dPw46Y6xSsbRDZ7NY4aGXjWRxyPsWtz35N95bY7+b7elZcWWcc7xCFxHQRrKd29piI8vFKfjWqfoYP/P3lJnX38lNHZXBPPvz9v2YGOcIU9XBJA+KJrXgAlua4sQdLnqXjJq7Xr3ZhJ0nZ3Fps1ctbzy+SHqG2OYTLBuEWelgjhZFC5sYyguz3Ot9bHrUzHrLUrFYhrer7OYdRltlm8xM8/BOdltpZMQpKp8rGMLA9gDL68i+tz1qdp8s5I3mGq8Y4dTQ5a0raZ3jfmztnz81puxh9hqkKhn3QLoF0C6BdAugXQLoF0C6BdAugjnCAf3bW9hJ+CCZYf4KP6jPwCDIQEBB8kJJ0l5vxulMNRNG7e17xutfU2NusWVDkr3bzEus6DLGXT0vHjEJZwR4i2KrdG6w45lmn/mYb29IJ+xSdDeItMeah7Taa2TT1yR/2z9pdlBVrLRC6Pm/Lm51wxYm0RRQB3Kc7jHNt/K29jfm1t/dQdbkiK91tPZfTTbPbN4RG31lyYqs67N6naOb0C/D3vw7iBbjDTCHfpmMeXf0XV53d8Xd+Dldc9aaz0vhF9/pvu5j8WNd/wBH7w+6q71PI3P+p9H5W/L+T4sa7/o/eH3V89SyH9T6Pyt+X8nxY13/AEfvD7q++pZD+p9H5W/L+WHi+wlVSwvml4rIyxOV5J1IGgt1rzfS3pG8s2m4/pdRkjHXfefgjCir5KcL2Bq6mJk0fFZHjM27yDa9tRbqUmmkvasWhQ6rtBpcGS2K++8cuie7HbPTUFHVsny3eHvGV1xbi7a6DoVhpsVscbWalxvX4tZmrfHvyjbmz9nz81puxh9hqkqVn5kDMgZkDMgZkDMgZkDMgZkDMgZkDMgjm35/dtZ2Mn4IJth/go/qM/AIMhAQEFCg5FwtYE5kwqmDkSWY+w714FgT1EW9I61W63Fz78N37M6+vo501usc4+X8IDDKWODmmzmkOaRvBGoIUCs7TvDaMtK5KTS0cpdi2U4QoJ2NZVOEU2430Y+3O07hf+k/3Vvh1VbRtLn/ABHgOfBeb4o71fv9W4x7bGlpWEuka99rtjY4Oc7fbdoBodSsl9RSkdUHScK1GpvFYrMR5y4jjeKyVcz5pu+dbQbmgbmjq/8As86p8uTv23dF0OjppMUY6fX4y2uwOAmsq2XB4uItlkI6jdrf/cRbzXWXS4u/eJ8IQeO6+NNp5rH4rco/z+TvLQriYc3l9L6CChQRrhG8XVP1We21R9TH+lK14H7/AIvnP6S4MqV0+XftgB+76b6n+SrvT+zhy3jHvuX5ttio+Qm7N/slZ1ajuAH5rT9jD7DUGdmQMyBmQMyBmQMyBmQMyBmQMyBmQMyCO7en921nYyfggnOH+Cj+oz8AgyEBAQUQWKylZMwskaHMcC1zSLghfJiJjaXvHkvjtF6TtMOS7T8G80JL6S8se/Jf5Ruu4D+YAenqVZm0cxzq3fh3aPHkiKanlbz8P4Qeppnxm0jHMOos5padN+hChzW0dYbJj1GLJG9bRMfNbYwk2aCSdAALk+YBfIiXqcmOI3mYSLZ/YuqrCC1hjjvYySAtHXlFru/DrUjHprX8NlRruN6XTRynvT5R/l2fZ/A4qGIRQjTe5x757v6nHp/BWuPHFK7Q0HW6zLq8s5Mk/wAR8G1WREEBBQoI/t9A6SgnZG1z3uDAGtBLjy2nQDesOorNscxCy4Rkrj1mO952iJ6/SXFfg5V+S1H3L/8ASqfQZP8AbLoc8V0f/lr+bt2w8Do6CnbI1zXBli1wIcDc7wdQrfBExjiJc64pkrk1eS1J3iZbLFvAS9nJ7JWVXozgJ+a0/Yw+w1BnXQLoF0C6BdAugXQLoF0C6BdAzINZtBh/dVNNAHZeNY6PNa+XNz2uLoKQ1OJMa1omobNAaPmk24Cwv86QXO7cS+mofVJ/1SB3biX01D6nP+qQO7cS+mofVJ/1SB3biX01D6pP+qQO7cS+mofVJ/1SB3biX01D6pP+qR8lbfUYie+loD56OY//ACl82eomY6KCbEBukw/1Kb9UvvdfZvPmud24l9NQ+qT/AKpHlXu3EvpqH1Sf9Ugd24l9NQ+pz/qkFO7sS+mofU5/1SCvduJfTUPqk/6pA7txL6ah9Tn/AFSCnduJfTUPqk/6pDmd24l9NQ+pz/ql8OavduJfTUPqc/6pfRbqKjEXtcwz0NnAtPzSe9iLG3zrrQZOHwcVFHHe+RjI77r5WgXt6EGRdBS6Ct0C6BdAzIKXQVugXQLoF0FLoPi6BdAugXQLoF0C6BdAugXQLoF0C6BdAug0VfisglexhiaG6DObZjlY42/qJ4wckW3b9dAtzYxLYujLXDIXuHFuyxEtBZd+azzc6tGtjfS2oXamvmZn5UZ4ueCI/Jm7mymO/wDNYEcY7XzdCDJpqx7qgsDg+MZ8xEZaI3BwDGZy6z3WzXAGltbaAhZpccJJD2aNlMRcCLC8z4o9CbnvRc9f2BdoMbZKzOWvY05S0lpOYOGYWsN450GP+0pRyiWZTNLThmQggMLw05s2p+TFxbnKDMwKpklha+YWc4NdbKG72g6APdca8+vUgw6jFpIXuM92svIWgRZg9rGOeAJA82dZhNnAbiOgoK1WIyueI2B0bmueH2MbjYMa8EFwIty9dL6IL0ONclhkY5jnthda7SPlXiPeDuBc0nqIQWpto2NNixxHLFwQTyOM5huB4o2Jt3w60F+HGCZREYng6XIIIbdpcCbcxAHpcAg+q7EXRysYG5g9psL2ObOxo1OluUeZAosV44tyxusWtc5xLeRmLgBa/K7w6jpG/VBscyBdAugt3QLoF0C6BdAugXQLoF0C6BdAugXQLoF0GPNRxvN3saSRY3G8a6HpGp3oPk4fFyvk2crNmFtHZu+uOe9z9qD5dhsJGUxtIzB9iL3cLWcb7yLDXqCC5T0ccZuxjWnXcLbzc/adUFqnwyJhByhzg5z8xAvdznPv6C91ui6C9S0zIriNobe24W3bvQEHw2hiDi4RtzEudewvd3fHqJubnrQVlo2uDRd7Q0ZQGSPjFhuFmEXQfP7Oivm4tpdqLkXJuMrjrzkEgneUH3BRxs7xjRv5tdQAdT1NA8wCC1+yoMoaYoy0XsC0EC4ANr9QA9AQfTsOhNiY2aAMHJFg0AgC3mcR6T0oK1FBG8kuaLkFuYaGxBGhHPZxsea6C6+BriHFoLm7iRqNQdD52j7EFruCK4PFtuBYG24am3/kftPSgyQbIK3QLoLaAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIP/9k";

