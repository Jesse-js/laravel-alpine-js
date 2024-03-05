import './bootstrap';

import Alpine from 'alpinejs';

import counter from '../alpine/counter.js';

Alpine.data('counter', counter);
Alpine.start();