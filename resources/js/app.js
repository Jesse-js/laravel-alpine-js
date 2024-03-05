import './bootstrap';

import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';
import counter from '../alpine/counter.js';

Alpine.plugin(mask);
Alpine.data('counter', counter);
Alpine.start();