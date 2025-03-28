/**
 * Eswatini Judiciary Website
 * Courts Page JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all interactive features
    initHierarchyVisualization();
    initCourtsExplorer();
    initCourtComparison();
    initCourtLocations();
    initProcedureTabs();
    initFaqAccordion();
    initSmoothScrolling();
    
    // Remove placeholder shimmer after data loads
    setTimeout(() => {
        document.querySelectorAll('.court-placeholder').forEach(placeholder => {
            placeholder.style.display = 'none';
        });
    }, 1500);
});

/**
 * Initialize the Court Hierarchy Visualization with D3.js
 */
function initHierarchyVisualization() {
    const hierarchyContainer = document.getElementById('hierarchyContainer');
    if (!hierarchyContainer) return;
    
    // Create and append SVG
    const width = hierarchyContainer.clientWidth;
    const height = 400;
    
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('width', width);
    svg.setAttribute('height', height);
    svg.style.overflow = 'visible';
    hierarchyContainer.appendChild(svg);
    
    // Court hierarchy data
    const hierarchyData = {
        name: "Eswatini Judiciary",
        children: [
            {
                name: "Supreme Court",
                type: "apex",
                children: [
                    {
                        name: "High Court",
                        type: "superior",
                        children: [
                            { name: "Magistrate Courts", type: "magistrate" },
                            { name: "Small Claims Court", type: "specialized" },
                            { name: "Commercial Court", type: "specialized" }
                        ]
                    },
                    {
                        name: "Industrial Court of Appeal",
                        type: "superior",
                        children: [
                            { name: "Industrial Court", type: "specialized" }
                        ]
                    }
                ]
            }
        ]
    };
    
    // Define colors for court types
    const colors = {
        apex: getComputedStyle(document.documentElement).getPropertyValue('--primary-color').trim(),
        superior: getComputedStyle(document.documentElement).getPropertyValue('--secondary-color').trim(),
        specialized: getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim(),
        magistrate: "#4DB6AC",
        default: "#555"
    };
    
    // Create the hierarchy visualization
    try {
        if (typeof d3 !== 'undefined') {
            createD3Hierarchy(svg, hierarchyData, width, height, colors);
        } else {
            createBasicHierarchy(svg, hierarchyData, width, height, colors);
        }
    } catch (error) {
        console.log('Falling back to basic hierarchy visualization');
        createBasicHierarchy(svg, hierarchyData, width, height, colors);
    }
}

/**
 * Create a D3.js based hierarchy visualization
 */
function createD3Hierarchy(svg, data, width, height, colors) {
    // This is a simplified version for demonstration
    // In a real implementation, we would use D3.js tree layout
    
    const root = d3.hierarchy(data);
    const treeLayout = d3.tree().size([width - 100, height - 60]);
    treeLayout(root);
    
    // Create links
    const links = svg.append("g")
        .selectAll(".link")
        .data(root.links())
        .enter()
        .append("path")
        .attr("class", "link")
        .attr("d", d3.linkHorizontal()
            .x(d => d.y)
            .y(d => d.x))
        .style("fill", "none")
        .style("stroke", "#ccc")
        .style("stroke-width", 1.5)
        .style("opacity", 0)
        .transition()
        .duration(1000)
        .delay((d, i) => i * 100)
        .style("opacity", 0.5);
    
    // Create nodes
    const nodes = svg.append("g")
        .selectAll(".node")
        .data(root.descendants())
        .enter()
        .append("g")
        .attr("class", "node")
        .attr("transform", d => `translate(${d.y},${d.x})`)
        .style("opacity", 0)
        .transition()
        .duration(1000)
        .delay((d, i) => i * 150)
        .style("opacity", 1);
    
    // Add circles for nodes
    nodes.append("circle")
        .attr("r", 8)
        .style("fill", d => colors[d.data.type] || colors.default)
        .style("stroke", "#fff")
        .style("stroke-width", 2);
    
    // Add labels for nodes
    nodes.append("text")
        .attr("dy", -12)
        .attr("text-anchor", "middle")
        .text(d => d.data.name)
        .style("font-size", "12px")
        .style("fill", "#fff");
}

/**
 * Create a basic hierarchy visualization when D3.js is not available
 */
function createBasicHierarchy(svg, data, width, height, colors) {
    // Starting point
    const startX = width / 2;
    const startY = 50;
    
    // Create a basic tree layout
    drawNode(svg, data, startX, startY, 0, width, colors);
}

/**
 * Helper function to recursively draw nodes in the basic hierarchy
 */
function drawNode(svg, node, x, y, level, width, colors) {
    // Create node circle
    const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
    circle.setAttribute('cx', x);
    circle.setAttribute('cy', y);
    circle.setAttribute('r', 20);
    circle.setAttribute('fill', colors[node.type] || colors.default);
    svg.appendChild(circle);
    
    // Create node text
    const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
    text.setAttribute('x', x);
    text.setAttribute('y', y - 30);
    text.setAttribute('text-anchor', 'middle');
    text.setAttribute('fill', '#fff');
    text.textContent = node.name;
    svg.appendChild(text);
    
    // Draw children if any
    if (node.children && node.children.length) {
        const nextLevel = level + 1;
        const nodeWidth = width / node.children.length;
        
        node.children.forEach((child, i) => {
            // Calculate child position
            const childX = x - width / 2 + nodeWidth * i + nodeWidth / 2;
            const childY = y + 80;
            
            // Draw connecting line
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', x);
            line.setAttribute('y1', y + 20);
            line.setAttribute('x2', childX);
            line.setAttribute('y2', childY - 20);
            line.setAttribute('stroke', '#555');
            line.setAttribute('stroke-width', '2');
            svg.appendChild(line);
            
            // Draw child node
            drawNode(svg, child, childX, childY, nextLevel, nodeWidth, colors);
        });
    }
}

/**
 * Initialize the Courts Explorer section
 */
function initCourtsExplorer() {
    const courtsContainer = document.getElementById('courtsContainer');
    const viewButtons = document.querySelectorAll('.view-btn');
    const filterOptions = document.querySelectorAll('.filter-option input');
    const searchInput = document.getElementById('courtSearch');
    
    if (!courtsContainer) return;
    
    // Load court data (usually from an API but we're using the preloaded data)
    const courts = window.courtData || [];
    
    // Render courts
    renderCourts(courts, courtsContainer);
    
    // Handle view toggle
    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const view = this.getAttribute('data-view');
            
            // Update active class
            viewButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Update view
            courtsContainer.className = view === 'list' ? 'courts-list' : 'courts-grid';
        });
    });
    
    // Handle filters
    filterOptions.forEach(option => {
        option.addEventListener('change', function() {
            // If "All Courts" is checked, uncheck others
            if (this.value === 'all' && this.checked) {
                filterOptions.forEach(opt => {
                    if (opt.value !== 'all') opt.checked = false;
                });
            }
            
            // If another option is checked, uncheck "All Courts"
            if (this.value !== 'all' && this.checked) {
                const allOption = document.querySelector('.filter-option input[value="all"]');
                if (allOption) allOption.checked = false;
            }
            
            // Get selected filters
            const selectedFilters = Array.from(filterOptions)
                .filter(opt => opt.checked)
                .map(opt => opt.value);
            
            // If no filters or only "All Courts" is selected, show all
            const filterAll = selectedFilters.includes('all') || selectedFilters.length === 0;
            
            // Filter courts
            const filteredCourts = filterAll 
                ? courts 
                : courts.filter(court => selectedFilters.includes(court.type));
            
            // Render filtered courts
            renderCourts(filteredCourts, courtsContainer);
        });
    });
    
    // Handle search
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            // Filter courts by search term
            const filteredCourts = courts.filter(court => 
                court.name.toLowerCase().includes(searchTerm) || 
                court.description.toLowerCase().includes(searchTerm)
            );
            
            // Render filtered courts
            renderCourts(filteredCourts, courtsContainer);
        });
    }
}

/**
 * Render courts to the container
 */
function renderCourts(courts, container) {
    // Clear container first
    container.innerHTML = '';
    
    // Check if we have courts
    if (courts.length === 0) {
        const noResults = document.createElement('div');
        noResults.className = 'no-results';
        noResults.innerHTML = `
            <i class="fas fa-search"></i>
            <p>No courts found matching your criteria.</p>
        `;
        container.appendChild(noResults);
        return;
    }
    
    // Render each court card
    courts.forEach(court => {
        const courtCard = document.createElement('div');
        courtCard.className = 'court-card';
        courtCard.setAttribute('data-id', court.id);
        
        // Create card content
        courtCard.innerHTML = `
            <div class="court-image">
                <img src="${court.image}" alt="${court.name}">
                <span class="court-type ${court.type}">${formatCourtType(court.type)}</span>
            </div>
            <div class="court-details">
                <h3>${court.name}</h3>
                <p>${court.description}</p>
                <div class="court-meta">
                    <span><i class="fas fa-map-marker-alt"></i> ${court.location}</span>
                    <span><i class="fas fa-calendar-alt"></i> Est. ${court.established}</span>
                </div>
                <div class="court-actions">
                    <a href="${court.id}.php" class="btn btn-sm btn-primary">Learn More</a>
                </div>
            </div>
        `;
        
        // Add card to container with animation
        courtCard.style.opacity = '0';
        courtCard.style.transform = 'translateY(20px)';
        container.appendChild(courtCard);
        
        // Trigger animation after a short delay
        setTimeout(() => {
            courtCard.style.opacity = '1';
            courtCard.style.transform = 'translateY(0)';
        }, 50 * container.children.length);
    });
}

/**
 * Format court type for display
 */
function formatCourtType(type) {
    switch (type) {
        case 'apex': return 'Apex Court';
        case 'superior': return 'Superior Court';
        case 'specialized': return 'Specialized Court';
        case 'magistrate': return 'Magistrate Court';
        default: return type;
    }
}

/**
 * Initialize Court Comparison functionality
 */
function initCourtComparison() {
    const firstSelect = document.getElementById('firstCourtSelect');
    const secondSelect = document.getElementById('secondCourtSelect');
    
    if (!firstSelect || !secondSelect) return;
    
    // Court comparison data
    const comparisonData = {
        'supreme-court': {
            name: 'Supreme Court',
            jurisdiction: 'Final appellate jurisdiction over all matters.',
            appeal: 'Final court of appeal, no further appeals possible.',
            judges: '5 judges including the Chief Justice.',
            caseTypes: 'Appeals from High Court and Industrial Court of Appeal.',
            fees: 'E1,000 - E5,000 depending on case complexity.'
        },
        'high-court': {
            name: 'High Court',
            jurisdiction: 'Original jurisdiction in civil and criminal matters, appellate jurisdiction from lower courts.',
            appeal: 'Appeals go to the Supreme Court.',
            judges: 'Chief Justice and several puisne judges.',
            caseTypes: 'Serious criminal cases, complex civil matters, constitutional cases.',
            fees: 'E500 - E2,500 depending on case type and value.'
        },
        'industrial-court-appeal': {
            name: 'Industrial Court of Appeal',
            jurisdiction: 'Appeals from the Industrial Court on employment and labor matters.',
            appeal: 'Appeals go to the Supreme Court.',
            judges: '3 judges with expertise in labor law.',
            caseTypes: 'Appeals from Industrial Court decisions.',
            fees: 'E800 - E2,000 depending on case complexity.'
        },
        'commercial-court': {
            name: 'Commercial Court',
            jurisdiction: 'Commercial and business disputes of significant value.',
            appeal: 'Appeals go to the High Court or Supreme Court.',
            judges: 'Specialized judges with commercial law expertise.',
            caseTypes: 'Business disputes, corporate matters, bankruptcy, financial litigation.',
            fees: 'E1,000 - E3,000 depending on claim value.'
        },
        'industrial-court': {
            name: 'Industrial Court',
            jurisdiction: 'Employment and labor disputes, unfair dismissal claims, and workplace issues.',
            appeal: 'Appeals go to the Industrial Court of Appeal.',
            judges: 'Judges with expertise in labor law and industrial relations.',
            caseTypes: 'Unfair dismissal, workplace discrimination, labor disputes.',
            fees: 'E300 - E1,000 depending on case complexity.'
        },
        'small-claims-court': {
            name: 'Small Claims Court',
            jurisdiction: 'Civil claims below E10,000.',
            appeal: 'Appeals go to the High Court.',
            judges: 'Magistrates or commissioners.',
            caseTypes: 'Minor civil disputes, small debt recovery, consumer claims.',
            fees: 'E50 - E200 depending on claim value.'
        },
        'magistrate-courts': {
            name: 'Magistrate Courts',
            jurisdiction: 'Limited civil and criminal jurisdiction as prescribed by statute.',
            appeal: 'Appeals go to the High Court.',
            judges: 'Principal Magistrates, Senior Magistrates, and Magistrates.',
            caseTypes: 'Minor criminal cases, civil matters under a certain threshold.',
            fees: 'E100 - E500 depending on case type and complexity.'
        }
    };
    
    // Handle select changes
    [firstSelect, secondSelect].forEach(select => {
        select.addEventListener('change', updateComparison);
    });
    
    /**
     * Update the comparison table based on selected courts
     */
    function updateComparison() {
        const firstCourtId = firstSelect.value;
        const secondCourtId = secondSelect.value;
        
        // Update headers
        document.getElementById('firstCourtHeader').textContent = 
            firstCourtId ? comparisonData[firstCourtId].name : 'First Court';
        document.getElementById('secondCourtHeader').textContent = 
            secondCourtId ? comparisonData[secondCourtId].name : 'Second Court';
        
        // Update comparison data
        updateComparisonField('Jurisdiction', firstCourtId, secondCourtId);
        updateComparisonField('Appeal', firstCourtId, secondCourtId);
        updateComparisonField('Judges', firstCourtId, secondCourtId);
        updateComparisonField('CaseTypes', firstCourtId, secondCourtId);
        updateComparisonField('Fees', firstCourtId, secondCourtId);
        
        // Highlight differences
        highlightDifferences();
    }
    
    /**
     * Update a specific comparison field
     */
    function updateComparisonField(field, firstCourtId, secondCourtId) {
        const fieldLower = field.toLowerCase();
        
        document.getElementById(`firstCourt${field}`).textContent = 
            firstCourtId ? comparisonData[firstCourtId][fieldLower] : '-';
        document.getElementById(`secondCourt${field}`).textContent = 
            secondCourtId ? comparisonData[secondCourtId][fieldLower] : '-';
    }
    
    /**
     * Highlight differences between compared courts
     */
    function highlightDifferences() {
        const rows = document.querySelectorAll('#comparisonTable tbody tr');
        
        rows.forEach(row => {
            const cells = row.querySelectorAll('td:not(:first-child)');
            if (cells.length === 2) {
                const isEqual = cells[0].textContent === cells[1].textContent;
                
                cells.forEach(cell => {
                    cell.style.backgroundColor = isEqual ? '' : 'rgba(41, 98, 255, 0.2)';
                });
            }
        });
    }
}

/**
 * Initialize Court Locations Map and List
 */
function initCourtLocations() {
    const mapContainer = document.getElementById('courtsMap');
    const locationsContainer = document.getElementById('locationsContainer');
    const locationSearch = document.getElementById('locationSearch');
    const categoryButtons = document.querySelectorAll('.category-btn');
    const locationFinder = document.querySelector('.location-finder');
    
    if (!mapContainer || !locationsContainer) return;
    
    // Court locations data
    const locations = [
        {
            id: 'mbabane-high-court',
            name: 'Mbabane High Court',
            type: 'principal',
            address: 'Hospital Hill, Mbabane',
            phone: '+268 2404 2968',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: 'manzini-magistrate',
            name: 'Manzini Magistrate Court',
            type: 'regional',
            address: 'Main Street, Manzini',
            phone: '+268 2505 2123',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-26.4957, 31.3887]
        },
        {
            id: 'nhlangano-magistrate',
            name: 'Nhlangano Magistrate Court',
            type: 'magistrate',
            address: 'Central Street, Nhlangano',
            phone: '+268 2207 3312',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-27.1125, 31.1981]
        },
        {
            id: 'siteki-magistrate',
            name: 'Siteki Magistrate Court',
            type: 'magistrate',
            address: 'Main Road, Siteki',
            phone: '+268 2343 4120',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-26.4418, 31.9447]
        },
        {
            id: 'piggs-peak-magistrate',
            name: "Pigg's Peak Magistrate Court",
            type: 'magistrate',
            address: "Pigg's Peak",
            phone: '+268 2437 1910',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-25.9632, 31.2465]
        },
        {
            id: 'simunye-magistrate',
            name: 'Simunye Magistrate Court',
            type: 'magistrate',
            address: 'Simunye',
            phone: '+268 2383 8414',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-26.2148, 31.9286]
        },
        {
            id: 'mbabane-magistrate',
            name: 'Mbabane Magistrate Court',
            type: 'regional',
            address: 'Allister Miller Street, Mbabane',
            phone: '+268 2404 3116',
            hours: 'Mon-Fri: 8:00 AM - 4:00 PM',
            coordinates: [-26.3154, 31.1317]
        }
    ];
    
    // Render locations list
    renderLocationsList(locations, locationsContainer);
    
    // Initialize map if the Leaflet library is available
    if (typeof L !== 'undefined') {
        initializeLeafletMap(mapContainer, locations);
    } else {
        // Fallback message if Leaflet is not available
        mapContainer.innerHTML = `
            <div class="map-placeholder">
                <i class="fas fa-map-marked-alt"></i>
                <span>Map Available in Live Version</span>
            </div>
        `;
    }
    
    // Handle location finder button
    if (locationFinder) {
        locationFinder.addEventListener('click', findNearestCourt);
    }
    
    // Handle location filter buttons
    if (categoryButtons) {
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active class
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter locations
                const category = this.getAttribute('data-category');
                filterLocations(category, locations, locationsContainer);
            });
        });
    }
    
    // Handle location search
    if (locationSearch) {
        locationSearch.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            // Filter locations by search term
            const filteredLocations = locations.filter(location => 
                location.name.toLowerCase().includes(searchTerm) || 
                location.address.toLowerCase().includes(searchTerm)
            );
            
            // Render filtered locations
            renderLocationsList(filteredLocations, locationsContainer);
        });
    }
}

/**
 * Render the list of court locations
 */
function renderLocationsList(locations, container) {
    // Clear container
    container.innerHTML = '';
    
    // Check if we have locations
    if (locations.length === 0) {
        container.innerHTML = `
            <div class="no-locations">
                <i class="fas fa-search"></i>
                <p>No court locations found matching your criteria.</p>
            </div>
        `;
        return;
    }
    
    // Render each location card
    locations.forEach(location => {
        const locationCard = document.createElement('div');
        locationCard.className = 'location-card';
        locationCard.setAttribute('data-id', location.id);
        locationCard.setAttribute('data-lat', location.coordinates[0]);
        locationCard.setAttribute('data-lng', location.coordinates[1]);
        
        // Create card content
        locationCard.innerHTML = `
            <div class="location-header">
                <span class="location-name">${location.name}</span>
                <span class="location-type">${location.type}</span>
            </div>
            <div class="location-details">
                <p><i class="fas fa-map-marker-alt"></i> ${location.address}</p>
                <p><i class="fas fa-phone"></i> ${location.phone}</p>
                <p><i class="fas fa-clock"></i> ${location.hours}</p>
            </div>
        `;
        
        // Add click event to highlight on map
        locationCard.addEventListener('click', function() {
            // Remove active class from all cards
            document.querySelectorAll('.location-card').forEach(card => {
                card.classList.remove('active');
            });
            
            // Add active class to this card
            this.classList.add('active');
            
            // Center map on this location if Leaflet is available
            if (typeof L !== 'undefined' && window.courtsMap) {
                const lat = parseFloat(this.getAttribute('data-lat'));
                const lng = parseFloat(this.getAttribute('data-lng'));
                
                window.courtsMap.setView([lat, lng], 13);
                
                // Find and open the marker popup
                window.courtMarkers.forEach(marker => {
                    if (marker.options.id === location.id) {
                        marker.openPopup();
                    }
                });
            }
        });
        
        // Add card to container
        container.appendChild(locationCard);
    });
}

/**
 * Initialize Leaflet map for court locations
 */
function initializeLeafletMap(container, locations) {
    // Create map centered on Eswatini
    const map = L.map(container).setView([-26.5225, 31.4659], 8);
    
    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    // Store markers array
    const markers = [];
    
    // Add markers for each location
    locations.forEach(location => {
        const marker = L.marker(location.coordinates)
            .addTo(map)
            .bindPopup(`
                <strong>${location.name}</strong><br>
                ${location.address}<br>
                <a href="https://maps.google.com/?q=${location.coordinates[0]},${location.coordinates[1]}" target="_blank">Directions</a>
            `);
        
        // Store location ID with marker for reference
        marker.options.id = location.id;
        
        // Store marker in array
        markers.push(marker);
    });
    
    // Store map and markers in window for access by other functions
    window.courtsMap = map;
    window.courtMarkers = markers;
}

/**
 * Filter locations by category
 */
function filterLocations(category, locations, container) {
    // Filter locations by category
    const filteredLocations = category === 'all' 
        ? locations 
        : locations.filter(location => location.type === category);
    
    // Render filtered locations
    renderLocationsList(filteredLocations, container);
}

/**
 * Find nearest court location to user
 */
function findNearestCourt() {
    // Check if geolocation is available
    if (!navigator.geolocation) {
        alert('Geolocation is not supported by your browser');
        return;
    }
    
    // Show loading state
    const locationFinder = document.querySelector('.location-finder');
    if (locationFinder) {
        locationFinder.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Finding...</span>';
        locationFinder.disabled = true;
    }
    
    // Get user location
    navigator.geolocation.getCurrentPosition(
        // Success callback
        function(position) {
            const userLat = position.coords.latitude;
            const userLng = position.coords.longitude;
            
            // Find nearest court
            findNearestLocation(userLat, userLng);
            
            // Reset button
            if (locationFinder) {
                locationFinder.innerHTML = '<i class="fas fa-location-arrow"></i> <span>Find Nearest Court</span>';
                locationFinder.disabled = false;
            }
        },
        // Error callback
        function(error) {
            console.error('Error getting location:', error);
            alert('Unable to get your location. Please check your browser settings.');
            
            // Reset button
            if (locationFinder) {
                locationFinder.innerHTML = '<i class="fas fa-location-arrow"></i> <span>Find Nearest Court</span>';
                locationFinder.disabled = false;
            }
        }
    );
}

/**
 * Find the nearest court location to the given coordinates
 */
function findNearestLocation(userLat, userLng) {
    // Get all location cards
    const locationCards = document.querySelectorAll('.location-card');
    if (!locationCards.length) return;
    
    let nearestCard = null;
    let shortestDistance = Infinity;
    
    // Calculate distance to each location
    locationCards.forEach(card => {
        const lat = parseFloat(card.getAttribute('data-lat'));
        const lng = parseFloat(card.getAttribute('data-lng'));
        
        // Calculate distance using Haversine formula
        const distance = calculateDistance(userLat, userLng, lat, lng);
        
        // Update nearest if this is closer
        if (distance < shortestDistance) {
            shortestDistance = distance;
            nearestCard = card;
        }
    });
    
    // Highlight nearest location
    if (nearestCard) {
        // Scroll to and click the nearest location card
        nearestCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        setTimeout(() => nearestCard.click(), 500);
    }
}

/**
 * Calculate distance between two sets of coordinates using Haversine formula
 */
function calculateDistance(lat1, lon1, lat2, lon2) {
    const R = 6371; // Radius of the earth in km
    const dLat = deg2rad(lat2 - lat1);
    const dLon = deg2rad(lon2 - lon1);
    const a = 
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    const distance = R * c; // Distance in km
    return distance;
}

/**
 * Convert degrees to radians
 */
function deg2rad(deg) {
    return deg * (Math.PI / 180);
}

/**
 * Initialize the Procedure Tabs
 */
function initProcedureTabs() {
    const tabButtons = document.querySelectorAll('.procedure-tab');
    const contentPanes = document.querySelectorAll('.procedure-content');
    
    if (!tabButtons.length || !contentPanes.length) return;
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and content panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            contentPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding content pane
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Initialize FAQ Accordion
 */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    if (!faqItems.length) return;
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        if (question) {
            question.addEventListener('click', function() {
                // Toggle active class on item
                item.classList.toggle('active');
            });
        }
    });
}

/**
 * Initialize Smooth Scrolling
 */
function initSmoothScrolling() {
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#"
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                // Calculate offset accounting for header height
                const headerHeight = document.querySelector('.main-header')?.offsetHeight || 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
                
                // Smooth scroll to target
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Add a 3D tilt effect to court cards on mouse movement
 * This is a creative visual enhancement
 */
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const courtCards = document.querySelectorAll('.court-card');
        
        courtCards.forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const cardRect = this.getBoundingClientRect();
                const cardCenterX = cardRect.left + cardRect.width / 2;
                const cardCenterY = cardRect.top + cardRect.height / 2;
                
                // Calculate distance from center as percentage
                const percentX = (e.clientX - cardCenterX) / (cardRect.width / 2) * 5;
                const percentY = (e.clientY - cardCenterY) / (cardRect.height / 2) * 5;
                
                // Apply transform
                this.style.transform = `perspective(1000px) rotateY(${percentX}deg) rotateX(${-percentY}deg) scale(1.02)`;
                
                // Add highlight
                const imageElement = this.querySelector('.court-image');
                if (imageElement) {
                    const glareX = ((e.clientX - cardRect.left) / cardRect.width) * 100;
                    const glareY = ((e.clientY - cardRect.top) / cardRect.height) * 100;
                    
                    imageElement.style.background = `radial-gradient(circle at ${glareX}% ${glareY}%, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 60%)`;
                }
            });
            
            // Reset on mouse leave
            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
                
                const imageElement = this.querySelector('.court-image');
                if (imageElement) {
                    imageElement.style.background = '';
                }
            });
        });
    }, 2000); // Delay to ensure cards are fully loaded
});

/**
 * Add parallax effect to the hero section
 */
window.addEventListener('scroll', function() {
    const heroSection = document.querySelector('.courts-hero');
    const scrollPosition = window.scrollY;
    
    if (heroSection && scrollPosition < heroSection.offsetHeight) {
        // Move the background image
        heroSection.style.backgroundPosition = `center ${scrollPosition * 0.5}px`;
    }
});

/**
 * Animate step numbers in the procedure steps when they come into view
 */
document.addEventListener('DOMContentLoaded', function() {
    const stepNumbers = document.querySelectorAll('.step-number');
    
    if (!stepNumbers.length) return;
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Start counter animation
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    // Observe each step number
    stepNumbers.forEach(number => observer.observe(number));
    
    // Function to animate the counter
    function animateCounter(element) {
        // Get the target number from the element's text content
        const targetNumber = parseInt(element.textContent);
        
        // Save the original text color
        const originalColor = element.style.color;
        
        // Animate filling up the number
        element.textContent = '0';
        element.style.color = '#fff';
        
        let current = 0;
        const increment = targetNumber > 5 ? Math.ceil(targetNumber / 20) : 1;
        const interval = 100;
        
        const timer = setInterval(() => {
            current += increment;
            
            if (current >= targetNumber) {
                current = targetNumber;
                clearInterval(timer);
                
                // Add a slight pulse animation on completion
                element.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    element.style.transform = 'scale(1)';
                }, 200);
            }
            
            element.textContent = current;
        }, interval);
    }
});

/**
 * Dynamically animate the court hierarchy using SVG path animation
 */
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const hierarchyLines = document.querySelectorAll('#hierarchyContainer svg line');
        if (!hierarchyLines.length) return;
        
        hierarchyLines.forEach(line => {
            const length = line.getTotalLength();
            
            // Set up the animation properties
            line.style.strokeDasharray = length;
            line.style.strokeDashoffset = length;
            
            // Prepare animation
            line.animate(
                [
                    { strokeDashoffset: length },
                    { strokeDashoffset: 0 }
                ],
                {
                    duration: 1500,
                    easing: 'ease-in-out',
                    fill: 'forwards'
                }
            );
        });
    }, 1000);
});