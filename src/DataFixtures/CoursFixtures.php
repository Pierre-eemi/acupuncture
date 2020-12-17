<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use App\Entity\Page;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $c1 = new Cours();
        $c1->setTitre('Luminopuncture')
            ->setDescription('La luxopuncture, encore appelée Luminopuncture, est une méthode basée sur la stimulation, par un faisceau lumineux, des méridiens qui véhiculent l’énergie à travers le corps. Elle consiste en une stimulation des points d’acupuncture et d’auriculothérapie.');

        $manager->persist($c1);

        $p = new Page();
        $p->setTitre("Partie 1 : Les points d'acupuncture")
            ->setContenu("<p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus tristique faucibus. Phasellus vitae eros vitae lorem sodales fermentum. Phasellus metus diam, commodo eget lorem quis, facilisis vestibulum dolor. Donec ut dolor sollicitudin, auctor metus vel, egestas neque. Nunc magna ipsum, tristique quis libero at, sollicitudin vulputate turpis. Sed viverra nibh in scelerisque porttitor. In nec egestas augue. Vestibulum vel lectus nulla. Etiam dignissim odio orci, sed fermentum magna porttitor egestas. Donec non est lorem. Aenean imperdiet sem ac dapibus tempor.

            Nulla metus mauris, accumsan sit amet nisi vitae, commodo venenatis diam. Quisque vulputate bibendum nulla, vitae varius mauris. Ut facilisis iaculis ipsum. Suspendisse at justo massa. Quisque et est nibh. Nullam ut blandit libero. Curabitur nec leo tempus, tempor felis sit amet, aliquet odio. Suspendisse quis justo congue tellus tempus euismod. Ut vulputate mauris et magna pellentesque lacinia. Ut auctor posuere enim a bibendum. Ut vel odio ex. Mauris gravida ornare nunc, et tempus est congue vitae. Aenean a ultrices massa. Aenean id elit ex. Proin ultrices in mi sit amet tincidunt. Cras accumsan, ante viverra pellentesque commodo, leo orci egestas leo, ut placerat nulla arcu id magna. Nullam vehicula, felis vitae placerat luctus, justo erat bibendum elit, nec.</p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/luxo.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/luxo.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>")
            ->setNumPage(1)
            ->setVideo('UTFIOysNxWE');
        $c1->addPage($p);
        $manager->persist($p);

        $p = new Page();
        $p->setTitre('Partie 2')
            ->setContenu("<p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus tristique faucibus. Phasellus vitae eros vitae lorem sodales fermentum. Phasellus metus diam, commodo eget lorem quis, facilisis vestibulum dolor. Donec ut dolor sollicitudin, auctor metus vel, egestas neque. Nunc magna ipsum, tristique quis libero at, sollicitudin vulputate turpis. Sed viverra nibh in scelerisque porttitor. In nec egestas augue. Vestibulum vel lectus nulla. Etiam dignissim odio orci, sed fermentum magna porttitor egestas. Donec non est lorem. Aenean imperdiet sem ac dapibus tempor.

            Nulla metus mauris, accumsan sit amet nisi vitae, commodo venenatis diam. Quisque vulputate bibendum nulla, vitae varius mauris. Ut facilisis iaculis ipsum. Suspendisse at justo massa. Quisque et est nibh. Nullam ut blandit libero. Curabitur nec leo tempus, tempor felis sit amet, aliquet odio. Suspendisse quis justo congue tellus tempus euismod. Ut vulputate mauris et magna pellentesque lacinia. Ut auctor posuere enim a bibendum. Ut vel odio ex. Mauris gravida ornare nunc, et tempus est congue vitae. Aenean a ultrices massa. Aenean id elit ex. Proin ultrices in mi sit amet tincidunt. Cras accumsan, ante viverra pellentesque commodo, leo orci egestas leo, ut placerat nulla arcu id magna. Nullam vehicula, felis vitae placerat luctus, justo erat bibendum elit, nec.</p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/luxo.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/luxo.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>")
            ->setNumPage(2);
        $c1->addPage($p);
        $manager->persist($p);

        $p = new Page();
        $p->setTitre('Partie 3')
            ->setContenu("<p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus tristique faucibus. Phasellus vitae eros vitae lorem sodales fermentum. Phasellus metus diam, commodo eget lorem quis, facilisis vestibulum dolor. Donec ut dolor sollicitudin, auctor metus vel, egestas neque. Nunc magna ipsum, tristique quis libero at, sollicitudin vulputate turpis. Sed viverra nibh in scelerisque porttitor. In nec egestas augue. Vestibulum vel lectus nulla. Etiam dignissim odio orci, sed fermentum magna porttitor egestas. Donec non est lorem. Aenean imperdiet sem ac dapibus tempor.

            Nulla metus mauris, accumsan sit amet nisi vitae, commodo venenatis diam. Quisque vulputate bibendum nulla, vitae varius mauris. Ut facilisis iaculis ipsum. Suspendisse at justo massa. Quisque et est nibh. Nullam ut blandit libero. Curabitur nec leo tempus, tempor felis sit amet, aliquet odio. Suspendisse quis justo congue tellus tempus euismod. Ut vulputate mauris et magna pellentesque lacinia. Ut auctor posuere enim a bibendum. Ut vel odio ex. Mauris gravida ornare nunc, et tempus est congue vitae. Aenean a ultrices massa. Aenean id elit ex. Proin ultrices in mi sit amet tincidunt. Cras accumsan, ante viverra pellentesque commodo, leo orci egestas leo, ut placerat nulla arcu id magna. Nullam vehicula, felis vitae placerat luctus, justo erat bibendum elit, nec.</p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/luxo.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/luxo.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>")
            ->setNumPage(3);
        $c1->addPage($p);
        $manager->persist($p);

        $c2 = new Cours();
        $c2->setTitre('Moxibustion')
            ->setDescription('La moxibustion est une forme thérapeutique voisine de l’acupuncture. Dans cette technique, les points d’acupuncture sont stimulés par la chaleur. Les objets chauffants utilisés pour cette stimulation sont appelés des moxas.');

        $manager->persist($c2);

        $p = new Page();
        $p->setTitre("Partie 1 : Les points d'acupuncture")
            ->setContenu("<p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus tristique faucibus. Phasellus vitae eros vitae lorem sodales fermentum. Phasellus metus diam, commodo eget lorem quis, facilisis vestibulum dolor. Donec ut dolor sollicitudin, auctor metus vel, egestas neque. Nunc magna ipsum, tristique quis libero at, sollicitudin vulputate turpis. Sed viverra nibh in scelerisque porttitor. In nec egestas augue. Vestibulum vel lectus nulla. Etiam dignissim odio orci, sed fermentum magna porttitor egestas. Donec non est lorem. Aenean imperdiet sem ac dapibus tempor.

            Nulla metus mauris, accumsan sit amet nisi vitae, commodo venenatis diam. Quisque vulputate bibendum nulla, vitae varius mauris. Ut facilisis iaculis ipsum. Suspendisse at justo massa. Quisque et est nibh. Nullam ut blandit libero. Curabitur nec leo tempus, tempor felis sit amet, aliquet odio. Suspendisse quis justo congue tellus tempus euismod. Ut vulputate mauris et magna pellentesque lacinia. Ut auctor posuere enim a bibendum. Ut vel odio ex. Mauris gravida ornare nunc, et tempus est congue vitae. Aenean a ultrices massa. Aenean id elit ex. Proin ultrices in mi sit amet tincidunt. Cras accumsan, ante viverra pellentesque commodo, leo orci egestas leo, ut placerat nulla arcu id magna. Nullam vehicula, felis vitae placerat luctus, justo erat bibendum elit, nec.</p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/moxi.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/moxi.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>")
            ->setNumPage(1)
            ->setVideo('-0cgREA2io8');
        $c2->addPage($p);
        $manager->persist($p);

        $p = new Page();
        $p->setTitre('Page 2')
            ->setContenu("<p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus tristique faucibus. Phasellus vitae eros vitae lorem sodales fermentum. Phasellus metus diam, commodo eget lorem quis, facilisis vestibulum dolor. Donec ut dolor sollicitudin, auctor metus vel, egestas neque. Nunc magna ipsum, tristique quis libero at, sollicitudin vulputate turpis. Sed viverra nibh in scelerisque porttitor. In nec egestas augue. Vestibulum vel lectus nulla. Etiam dignissim odio orci, sed fermentum magna porttitor egestas. Donec non est lorem. Aenean imperdiet sem ac dapibus tempor.

            Nulla metus mauris, accumsan sit amet nisi vitae, commodo venenatis diam. Quisque vulputate bibendum nulla, vitae varius mauris. Ut facilisis iaculis ipsum. Suspendisse at justo massa. Quisque et est nibh. Nullam ut blandit libero. Curabitur nec leo tempus, tempor felis sit amet, aliquet odio. Suspendisse quis justo congue tellus tempus euismod. Ut vulputate mauris et magna pellentesque lacinia. Ut auctor posuere enim a bibendum. Ut vel odio ex. Mauris gravida ornare nunc, et tempus est congue vitae. Aenean a ultrices massa. Aenean id elit ex. Proin ultrices in mi sit amet tincidunt. Cras accumsan, ante viverra pellentesque commodo, leo orci egestas leo, ut placerat nulla arcu id magna. Nullam vehicula, felis vitae placerat luctus, justo erat bibendum elit, nec.</p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/moxi.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/moxi.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>")
            ->setNumPage(2);
        $c2->addPage($p);
        $manager->persist($p);

        $p = new Page();
        $p->setTitre('Page 3')
            ->setContenu("<p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus tristique faucibus. Phasellus vitae eros vitae lorem sodales fermentum. Phasellus metus diam, commodo eget lorem quis, facilisis vestibulum dolor. Donec ut dolor sollicitudin, auctor metus vel, egestas neque. Nunc magna ipsum, tristique quis libero at, sollicitudin vulputate turpis. Sed viverra nibh in scelerisque porttitor. In nec egestas augue. Vestibulum vel lectus nulla. Etiam dignissim odio orci, sed fermentum magna porttitor egestas. Donec non est lorem. Aenean imperdiet sem ac dapibus tempor.

            Nulla metus mauris, accumsan sit amet nisi vitae, commodo venenatis diam. Quisque vulputate bibendum nulla, vitae varius mauris. Ut facilisis iaculis ipsum. Suspendisse at justo massa. Quisque et est nibh. Nullam ut blandit libero. Curabitur nec leo tempus, tempor felis sit amet, aliquet odio. Suspendisse quis justo congue tellus tempus euismod. Ut vulputate mauris et magna pellentesque lacinia. Ut auctor posuere enim a bibendum. Ut vel odio ex. Mauris gravida ornare nunc, et tempus est congue vitae. Aenean a ultrices massa. Aenean id elit ex. Proin ultrices in mi sit amet tincidunt. Cras accumsan, ante viverra pellentesque commodo, leo orci egestas leo, ut placerat nulla arcu id magna. Nullam vehicula, felis vitae placerat luctus, justo erat bibendum elit, nec.</p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/moxi.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>
            <h3 class='p-2 m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class='m-4'>Maecenas placerat, quam a fringilla condimentum, augue justo imperdiet ante, id faucibus ligula sem nec enim. Nam venenatis, ex a volutpat tincidunt, arcu ex fermentum arcu, fringilla iaculis lacus mi vel eros.</p>
            <img src='/images/moxi.jpg' class='img-fluid m-4'>
            <p class='m-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis gravida ligula, vitae pulvinar tellus. Aliquam eget tellus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam quis viverra leo. Morbi nec suscipit nunc. Cras porta pulvinar lorem, sed efficitur velit dapibus ut. Cras at risus vitae sapien fermentum aliquam ac non velit.

            Fusce elementum placerat semper. Sed vitae interdum justo, eget elementum justo. Etiam non facilisis mi. Pellentesque maximus libero velit. Proin nec ipsum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut nulla justo. Etiam eget venenatis magna. Vivamus tortor est, tempor et malesuada ullamcorper, commodo id arcu. Nullam vel pretium nisl.
            
            Etiam gravida volutpat convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at mi luctus lectus finibus dapibus. Maecenas pharetra, arcu vitae scelerisque vestibulum, urna mi venenatis libero, ac vestibulum tortor massa nec nulla. Cras magna est, congue eu luctus eu, volutpat tincidunt leo. Praesent luctus diam id lacinia gravida. Donec volutpat convallis ante at tincidunt. Duis rutrum quam non leo sagittis, vel malesuada mauris iaculis. Duis non orci risus. Curabitur vel ipsum porttitor, volutpat nibh sed, scelerisque massa. Cras elementum suscipit quam.
            
            </p>")
            ->setNumPage(3);
        $c2->addPage($p);
        $manager->persist($p);

        $manager->flush();
    }
}
