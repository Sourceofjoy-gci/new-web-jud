/**
 * Magistrate Courts Page JavaScript
 * Interactive features and functionality for the Magistrate Courts page
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initVideoPlayer();
    initCourtFinderTabs();
    initInteractiveMap();
    initCourtsList();
    initJurisdictionTabs();
    initCaseWizard();
    initDocumentsTabs();
    initDocumentsSearch();
    initOfficialsFilter();
    initFaqSystem();
    initContactForm();
    initAnimations();
});

/**
 * Video Player Functionality
 */
function initVideoPlayer() {
    const videoPlaceholder = document.querySelector('.video-placeholder');
    if (!videoPlaceholder) return;
    
    videoPlaceholder.addEventListener('click', function() {
        // In a real implementation, this would replace the placeholder with an actual video player
        // For demo purposes, we'll just change the appearance to simulate a video starting
        
        const videoWrapper = this.parentElement;
        
        // Create a mock video player
        const mockPlayer = document.createElement('div');
        mockPlayer.className = 'mock-video-player';
        mockPlayer.innerHTML = `
            <div class="mock-video-controls">
                <div class="mock-play-button">
                    <i class="fas fa-pause"></i>
                </div>
                <div class="mock-progress-bar">
                    <div class="mock-progress"></div>
                </div>
                <div class="mock-time">0:05 / 2:30</div>
                <div class="mock-volume">
                    <i class="fas fa-volume-up"></i>
                </div>
                <div class="mock-fullscreen">
                    <i class="fas fa-expand"></i>
                </div>
            </div>
        `;
        
        // Style the mock player
        mockPlayer.style.position = 'absolute';
        mockPlayer.style.top = '0';
        mockPlayer.style.left = '0';
        mockPlayer.style.width = '100%';
        mockPlayer.style.height = '100%';
        mockPlayer.style.backgroundColor = '#000';
        mockPlayer.style.display = 'flex';
        mockPlayer.style.alignItems = 'flex-end';
        mockPlayer.style.justifyContent = 'center';
        mockPlayer.style.padding = '1rem';
        
        // Style the controls
        const controls = mockPlayer.querySelector('.mock-video-controls');
        controls.style.display = 'flex';
        controls.style.alignItems = 'center';
        controls.style.gap = '1rem';
        controls.style.width = '100%';
        controls.style.padding = '0.5rem';
        controls.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
        controls.style.borderRadius = '4px';
        
        // Style play button
        const playButton = mockPlayer.querySelector('.mock-play-button');
        playButton.style.cursor = 'pointer';
        playButton.style.color = '#fff';
        
        // Style progress bar
        const progressBar = mockPlayer.querySelector('.mock-progress-bar');
        progressBar.style.flex = '1';
        progressBar.style.height = '4px';
        progressBar.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
        progressBar.style.borderRadius = '2px';
        progressBar.style.overflow = 'hidden';
        progressBar.style.cursor = 'pointer';
        
        const progress = mockPlayer.querySelector('.mock-progress');
        progress.style.width = '15%';
        progress.style.height = '100%';
        progress.style.backgroundColor = '#e58e26';
        
        // Style time
        const time = mockPlayer.querySelector('.mock-time');
        time.style.color = '#fff';
        time.style.fontSize = '0.875rem';
        
        // Style volume and fullscreen
        const volume = mockPlayer.querySelector('.mock-volume');
        volume.style.color = '#fff';
        volume.style.cursor = 'pointer';
        
        const fullscreen = mockPlayer.querySelector('.mock-fullscreen');
        fullscreen.style.color = '#fff';
        fullscreen.style.cursor = 'pointer';
        
        // Remove the placeholder and add the mock player
        this.style.display = 'none';
        videoWrapper.appendChild(mockPlayer);
        
        // Simulate loading video
        alert('In a real implementation, this would load and play the actual video about Magistrate Courts.');
    });
}

/**
 * Court Finder Tabs
 */
function initCourtFinderTabs() {
    const tabsNav = document.querySelector('.finder-tabs .tabs-nav');
    if (!tabsNav) return;
    
    const tabs = tabsNav.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Show the corresponding content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Interactive Map for Court Finder
 */
function initInteractiveMap() {
    const mapContainer = document.getElementById('courtsMap');
    if (!mapContainer) return;
    
    // Remove loading indicator
    const loadingIndicator = mapContainer.querySelector('.map-loading');
    if (loadingIndicator) {
        setTimeout(() => {
            loadingIndicator.style.display = 'none';
        }, 1500); // Simulate loading time
    }
    
    // Court location data (in a real implementation, this would be fetched from an API)
    const courtLocations = [
        {
            id: 'mbabane',
            name: 'Mbabane Principal Magistrate Court',
            type: 'principal',
            region: 'hhohho',
            address: 'Hospital Hill, Mbabane',
            phone: '+268 2404 2501',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: 'manzini',
            name: 'Manzini Principal Magistrate Court',
            type: 'principal',
            region: 'manzini',
            address: 'Main Street, Manzini',
            phone: '+268 2505 2201',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-26.4957, 31.38]
        },
        {
            id: 'nhlangano',
            name: 'Nhlangano Senior Magistrate Court',
            type: 'senior',
            region: 'shiselweni',
            address: 'Main Road, Nhlangano',
            phone: '+268 2207 7301',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-27.1167, 31.2]
        },
        {
            id: 'siteki',
            name: 'Siteki Senior Magistrate Court',
            type: 'senior',
            region: 'lubombo',
            address: 'Main Street, Siteki',
            phone: '+268 2343 4101',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-26.4557, 31.95]
        },
        {
            id: 'piggsPeak',
            name: 'Pigg\'s Peak District Magistrate Court',
            type: 'district',
            region: 'hhohho',
            address: 'Main Road, Pigg\'s Peak',
            phone: '+268 2431 2201',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-25.9596, 31.2464]
        },
        {
            id: 'hlatikulu',
            name: 'Hlatikulu District Magistrate Court',
            type: 'district',
            region: 'shiselweni',
            address: 'Main Street, Hlatikulu',
            phone: '+268 2217 7401',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-26.9361, 31.3081]
        },
        {
            id: 'simunye',
            name: 'Simunye District Magistrate Court',
            type: 'district',
            region: 'lubombo',
            address: 'Main Road, Simunye',
            phone: '+268 2363 8101',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            coordinates: [-26.2138, 31.5187]
        }
    ];
    
    // Create a mock map for demonstration purposes
    const mockMap = document.createElement('div');
    mockMap.className = 'mock-map';
    mockMap.style.width = '100%';
    mockMap.style.height = '100%';
    mockMap.style.position = 'relative';
    mockMap.style.backgroundColor = '#e9ecef';
    mockMap.style.backgroundImage = 'url("assets/images/eswatini-map.png")';
    mockMap.style.backgroundSize = 'contain';
    mockMap.style.backgroundPosition = 'center';
    mockMap.style.backgroundRepeat = 'no-repeat';
    
    // Create markers for each court location
    courtLocations.forEach(court => {
        createCourtMarker(mockMap, court);
    });
    
    // Add the mock map to the container
    mapContainer.appendChild(mockMap);
    
    // Initialize filter functionality
    initMapFilters(mockMap, courtLocations);
    
    // Initialize locate me button
    const locateMeBtn = document.querySelector('.btn-locate-me');
    if (locateMeBtn) {
        locateMeBtn.addEventListener('click', function() {
            // In a real implementation, this would use the browser's geolocation API
            // For demo purposes, we'll just highlight a random court
            
            // Reset all markers
            const markers = mockMap.querySelectorAll('.court-marker');
            markers.forEach(marker => {
                marker.style.transform = 'translate(-50%, -50%) scale(1)';
                marker.querySelector('.marker-icon').style.backgroundColor = getCourTypeColor(marker.getAttribute('data-type'));
            });
            
            // Select a random court
            const randomIndex = Math.floor(Math.random() * courtLocations.length);
            const randomCourt = courtLocations[randomIndex];
            
            // Find and highlight the corresponding marker
            const marker = mockMap.querySelector(`.court-marker[data-id="${randomCourt.id}"]`);
            if (marker) {
                marker.style.transform = 'translate(-50%, -50%) scale(1.3)';
                marker.querySelector('.marker-icon').style.backgroundColor = '#e58e26';
                
                // Simulate a popup
                showCourtPopup(mockMap, randomCourt, marker);
                
                // Scroll the map into view if needed
                marker.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            
            alert(`Simulated geolocation: Found your nearest court to be ${randomCourt.name}`);
        });
    }
}

/**
 * Create court marker on the mock map
 */
function createCourtMarker(mapContainer, court) {
    // Calculate position (this is simplified; in a real map API, you'd use proper coordinates)
    const x = ((court.coordinates[1] - 31) * 100) + 50; // Longitude
    const y = ((court.coordinates[0] + 27) * -100) + 50; // Latitude
    
    // Create marker element
    const marker = document.createElement('div');
    marker.className = 'court-marker';
    marker.setAttribute('data-id', court.id);
    marker.setAttribute('data-type', court.type);
    marker.setAttribute('data-region', court.region);
    
    // Style the marker
    marker.style.position = 'absolute';
    marker.style.left = `${x}%`;
    marker.style.top = `${y}%`;
    marker.style.transform = 'translate(-50%, -50%)';
    marker.style.cursor = 'pointer';
    marker.style.zIndex = '10';
    marker.style.transition = 'all 0.3s ease';
    
    // Create marker icon
    const markerIcon = document.createElement('div');
    markerIcon.className = 'marker-icon';
    markerIcon.style.width = '16px';
    markerIcon.style.height = '16px';
    markerIcon.style.borderRadius = '50%';
    markerIcon.style.backgroundColor = getCourTypeColor(court.type);
    markerIcon.style.border = '2px solid #fff';
    markerIcon.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';
    
    // Create marker label
    const markerLabel = document.createElement('div');
    markerLabel.className = 'marker-label';
    markerLabel.textContent = court.name;
    markerLabel.style.position = 'absolute';
    markerLabel.style.top = '100%';
    markerLabel.style.left = '50%';
    markerLabel.style.transform = 'translateX(-50%)';
    markerLabel.style.width = '120px';
    markerLabel.style.textAlign = 'center';
    markerLabel.style.fontWeight = '600';
    markerLabel.style.fontSize = '0.75rem';
    markerLabel.style.padding = '0.25rem 0.5rem';
    markerLabel.style.backgroundColor = '#fff';
    markerLabel.style.borderRadius = '4px';
    markerLabel.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
    markerLabel.style.marginTop = '5px';
    markerLabel.style.opacity = '0';
    markerLabel.style.transition = 'opacity 0.3s ease';
    markerLabel.style.pointerEvents = 'none';
    
    // Add hover effect
    marker.addEventListener('mouseenter', function() {
        markerIcon.style.transform = 'scale(1.2)';
        markerLabel.style.opacity = '1';
    });
    
    marker.addEventListener('mouseleave', function() {
        markerIcon.style.transform = 'scale(1)';
        markerLabel.style.opacity = '0';
    });
    
    // Add click event
    marker.addEventListener('click', function() {
        // Remove any existing popups
        const existingPopups = mapContainer.querySelectorAll('.court-popup');
        existingPopups.forEach(popup => popup.remove());
        
        // Show the court popup
        showCourtPopup(mapContainer, court, this);
    });
    
    // Assemble and append marker
    marker.appendChild(markerIcon);
    marker.appendChild(markerLabel);
    mapContainer.appendChild(marker);
}

/**
 * Get color based on court type
 */
function getCourTypeColor(type) {
    switch (type) {
        case 'principal':
            return '#0f1b30'; // Dark blue
        case 'senior':
            return '#1e3a5f'; // Medium blue
        case 'district':
            return '#345d8a'; // Light blue
        default:
            return '#6c757d'; // Grey
    }
}

/**
 * Show court info popup
 */
function showCourtPopup(mapContainer, court, marker) {
    // Create popup element
    const popup = document.createElement('div');
    popup.className = 'court-popup';
    
    // Populate popup content
    popup.innerHTML = `
        <div class="popup-header">
            <h3>${court.name}</h3>
            <button class="popup-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="popup-body">
            <div class="popup-detail">
                <i class="fas fa-map-marker-alt"></i>
                <span>${court.address}</span>
            </div>
            <div class="popup-detail">
                <i class="fas fa-phone-alt"></i>
                <span>${court.phone}</span>
            </div>
            <div class="popup-detail">
                <i class="fas fa-clock"></i>
                <span>${court.hours}</span>
            </div>
            <div class="popup-actions">
                <button class="popup-action directions">
                    <i class="fas fa-directions"></i>
                    <span>Directions</span>
                </button>
                <button class="popup-action details">
                    <i class="fas fa-info-circle"></i>
                    <span>More Info</span>
                </button>
            </div>
        </div>
    `;
    
    // Style the popup
    popup.style.position = 'absolute';
    popup.style.width = '250px';
    popup.style.backgroundColor = '#fff';
    popup.style.borderRadius = '8px';
    popup.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
    popup.style.zIndex = '20';
    
    // Position the popup relative to the marker
    const markerRect = marker.getBoundingClientRect();
    const mapRect = mapContainer.getBoundingClientRect();
    
    // Convert to relative position within the map
    const markerTop = marker.offsetTop;
    const markerLeft = marker.offsetLeft;
    
    popup.style.top = `${markerTop - 10}px`;
    popup.style.left = `${markerLeft}px`;
    popup.style.transform = 'translate(-50%, -100%)';
    
    // Style the popup header
    const popupHeader = popup.querySelector('.popup-header');
    popupHeader.style.display = 'flex';
    popupHeader.style.justifyContent = 'space-between';
    popupHeader.style.alignItems = 'center';
    popupHeader.style.padding = '1rem';
    popupHeader.style.borderBottom = '1px solid #e9ecef';
    
    popupHeader.querySelector('h3').style.margin = '0';
    popupHeader.querySelector('h3').style.fontSize = '1.125rem';
    popupHeader.querySelector('h3').style.color = '#0f1b30';
    
    const closeButton = popupHeader.querySelector('.popup-close');
    closeButton.style.background = 'none';
    closeButton.style.border = 'none';
    closeButton.style.cursor = 'pointer';
    closeButton.style.color = '#6c757d';
    closeButton.style.fontSize = '1.125rem';
    
    // Style the popup body
    const popupBody = popup.querySelector('.popup-body');
    popupBody.style.padding = '1rem';
    
    // Style details
    const popupDetails = popup.querySelectorAll('.popup-detail');
    popupDetails.forEach(detail => {
        detail.style.display = 'flex';
        detail.style.alignItems = 'flex-start';
        detail.style.gap = '0.5rem';
        detail.style.marginBottom = '0.75rem';
        
        detail.querySelector('i').style.color = '#1e3a5f';
        detail.querySelector('i').style.marginTop = '0.25rem';
        
        detail.querySelector('span').style.fontSize = '0.9375rem';
        detail.querySelector('span').style.color = '#6c757d';
    });
    
    // Style actions
    const popupActions = popup.querySelector('.popup-actions');
    popupActions.style.display = 'flex';
    popupActions.style.gap = '0.75rem';
    popupActions.style.marginTop = '1.25rem';
    
    const popupButtons = popup.querySelectorAll('.popup-action');
    popupButtons.forEach(button => {
        button.style.flex = '1';
        button.style.display = 'flex';
        button.style.alignItems = 'center';
        button.style.justifyContent = 'center';
        button.style.gap = '0.5rem';
        button.style.padding = '0.625rem';
        button.style.border = 'none';
        button.style.borderRadius = '6px';
        button.style.cursor = 'pointer';
        button.style.fontSize = '0.875rem';
        button.style.fontWeight = '600';
        button.style.transition = 'all 0.3s ease';
    });
    
    const directionsButton = popup.querySelector('.directions');
    directionsButton.style.backgroundColor = '#e58e26';
    directionsButton.style.color = '#fff';
    
    directionsButton.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#f7a443';
    });
    
    directionsButton.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '#e58e26';
    });
    
    const detailsButton = popup.querySelector('.details');
    detailsButton.style.backgroundColor = '#f8f9fa';
    detailsButton.style.color = '#0f1b30';
    
    detailsButton.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#e9ecef';
    });
    
    detailsButton.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '#f8f9fa';
    });
    
    // Add button event listeners
    closeButton.addEventListener('click', function() {
        popup.remove();
    });
    
    directionsButton.addEventListener('click', function() {
        alert(`In a real implementation, this would show directions to ${court.name}`);
    });
    
    detailsButton.addEventListener('click', function() {
        alert(`In a real implementation, this would show more details about ${court.name}`);
    });
    
    // Add click outside to close
    document.addEventListener('click', function closePopup(e) {
        if (!popup.contains(e.target) && !marker.contains(e.target)) {
            popup.remove();
            document.removeEventListener('click', closePopup);
        }
    });
    
    // Add the popup to the map
    mapContainer.appendChild(popup);
    
    // Add a pointer/arrow to the popup
    const pointer = document.createElement('div');
    pointer.style.position = 'absolute';
    pointer.style.bottom = '-8px';
    pointer.style.left = '50%';
    pointer.style.transform = 'translateX(-50%) rotate(45deg)';
    pointer.style.width = '16px';
    pointer.style.height = '16px';
    pointer.style.backgroundColor = '#fff';
    popup.appendChild(pointer);
    
    // Highlight the marker
    marker.style.transform = 'translate(-50%, -50%) scale(1.3)';
    marker.querySelector('.marker-icon').style.backgroundColor = '#e58e26';
    
    // Reset marker when popup is closed
    closeButton.addEventListener('click', function() {
        marker.style.transform = 'translate(-50%, -50%) scale(1)';
        marker.querySelector('.marker-icon').style.backgroundColor = getCourTypeColor(court.type);
    });
}

/**
 * Initialize map filters
 */
function initMapFilters(mapContainer, courtLocations) {
    // Get filter checkboxes
    const typeFilters = document.querySelectorAll('.filter-options input[type="checkbox"][value]');
    const regionFilters = document.querySelectorAll('.filter-options input[type="checkbox"][value]');
    
    // Set up event listeners for type filters
    typeFilters.forEach(filter => {
        filter.addEventListener('change', applyFilters);
    });
    
    // Set up event listeners for region filters
    regionFilters.forEach(filter => {
        filter.addEventListener('change', applyFilters);
    });
    
    function applyFilters() {
        // Get selected types
        const selectedTypes = Array.from(typeFilters)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);
        
        // Get selected regions
        const selectedRegions = Array.from(regionFilters)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);
        
        // Get all markers
        const markers = mapContainer.querySelectorAll('.court-marker');
        
        // Filter markers
        markers.forEach(marker => {
            const markerType = marker.getAttribute('data-type');
            const markerRegion = marker.getAttribute('data-region');
            
            // Check if type is selected (or "all" is selected)
            const typeMatch = selectedTypes.includes('all') || selectedTypes.includes(markerType);
            
            // Check if region is selected (or "all" is selected)
            const regionMatch = selectedRegions.includes('all') || selectedRegions.includes(markerRegion);
            
            // Show or hide marker based on filters
            if (typeMatch && regionMatch) {
                marker.style.display = 'block';
            } else {
                marker.style.display = 'none';
            }
        });
    }
}

/**
 * Initialize Courts List View
 */
function initCourtsList() {
    const courtsGrid = document.getElementById('courtsGrid');
    if (!courtsGrid) return;
    
    // Court data (in a real implementation, this would be fetched from an API)
    const courts = [
        {
            id: 'mbabane',
            name: 'Mbabane Principal Magistrate Court',
            type: 'principal',
            region: 'hhohho',
            address: 'Hospital Hill, Mbabane',
            phone: '+268 2404 2501',
            email: 'mbabane.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/mbabane-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses', 'Protection Orders', 'Maintenance Cases']
        },
        {
            id: 'manzini',
            name: 'Manzini Principal Magistrate Court',
            type: 'principal',
            region: 'manzini',
            address: 'Main Street, Manzini',
            phone: '+268 2505 2201',
            email: 'manzini.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/manzini-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses', 'Protection Orders', 'Maintenance Cases']
        },
        {
            id: 'nhlangano',
            name: 'Nhlangano Senior Magistrate Court',
            type: 'senior',
            region: 'shiselweni',
            address: 'Main Road, Nhlangano',
            phone: '+268 2207 7301',
            email: 'nhlangano.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/nhlangano-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses', 'Protection Orders']
        },
        {
            id: 'siteki',
            name: 'Siteki Senior Magistrate Court',
            type: 'senior',
            region: 'lubombo',
            address: 'Main Street, Siteki',
            phone: '+268 2343 4101',
            email: 'siteki.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/siteki-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses', 'Protection Orders']
        },
        {
            id: 'piggsPeak',
            name: 'Pigg\'s Peak District Magistrate Court',
            type: 'district',
            region: 'hhohho',
            address: 'Main Road, Pigg\'s Peak',
            phone: '+268 2431 2201',
            email: 'piggspeak.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/piggspeak-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses']
        },
        {
            id: 'hlatikulu',
            name: 'Hlatikulu District Magistrate Court',
            type: 'district',
            region: 'shiselweni',
            address: 'Main Street, Hlatikulu',
            phone: '+268 2217 7401',
            email: 'hlatikulu.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/hlatikulu-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses']
        },
        {
            id: 'simunye',
            name: 'Simunye District Magistrate Court',
            type: 'district',
            region: 'lubombo',
            address: 'Main Road, Simunye',
            phone: '+268 2363 8101',
            email: 'simunye.magistrate@judiciary.org.sz',
            hours: 'Monday to Friday: 8:00 AM - 4:30 PM',
            image: 'assets/images/courts/simunye-magistrate.jpg',
            services: ['Civil Cases', 'Criminal Cases', 'Traffic Offenses']
        }
    ];
    
    // Create and populate court cards
    courts.forEach(court => {
        const courtCard = createCourtCard(court);
        courtsGrid.appendChild(courtCard);
    });
    
    // Initialize search and sorting functionality
    initCourtsSearch(courtsGrid, courts);
    initCourtsSorting(courtsGrid, courts);
}

/**
 * Create court card for list view
 */
function createCourtCard(court) {
    // Create card element
    const card = document.createElement('div');
    card.className = 'court-card';
    card.setAttribute('data-id', court.id);
    card.setAttribute('data-type', court.type);
    card.setAttribute('data-region', court.region);
    
    // Create card content
    card.innerHTML = `
        <div class="card-image">
            <img src="${court.image}" alt="${court.name}">
            <div class="court-type ${court.type}">${formatCourtType(court.type)}</div>
        </div>
        <div class="card-content">
            <h3>${court.name}</h3>
            <div class="card-details">
                <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>${court.address}</span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-phone-alt"></i>
                    <span>${court.phone}</span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-envelope"></i>
                    <span>${court.email}</span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-clock"></i>
                    <span>${court.hours}</span>
                </div>
            </div>
            <div class="card-services">
                <h4>Services</h4>
                <div class="services-list">
                    ${court.services.map(service => `<span class="service-tag">${service}</span>`).join('')}
                </div>
            </div>
            <div class="card-actions">
                <a href="#" class="card-action directions">
                    <i class="fas fa-directions"></i>
                    <span>Directions</span>
                </a>
                <a href="#" class="card-action details">
                    <i class="fas fa-info-circle"></i>
                    <span>More Info</span>
                </a>
            </div>
        </div>
    `;
    
    // Style the card
    card.style.background = '#fff';
    card.style.borderRadius = '8px';
    card.style.overflow = 'hidden';
    card.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
    card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
    
    // Add hover effect
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px)';
        this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.15)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
    });
    
    // Style card image
    const cardImage = card.querySelector('.card-image');
    cardImage.style.position = 'relative';
    cardImage.style.height = '180px';
    cardImage.style.overflow = 'hidden';
    
    const image = cardImage.querySelector('img');
    image.style.width = '100%';
    image.style.height = '100%';
    image.style.objectFit = 'cover';
    image.style.transition = 'transform 0.5s ease';
    
    // Add hover effect for image
    card.addEventListener('mouseenter', function() {
        image.style.transform = 'scale(1.1)';
    });
    
    card.addEventListener('mouseleave', function() {
        image.style.transform = 'scale(1)';
    });
    
    // Style court type badge
    const courtType = cardImage.querySelector('.court-type');
    courtType.style.position = 'absolute';
    courtType.style.top = '1rem';
    courtType.style.right = '1rem';
    courtType.style.padding = '0.35rem 0.75rem';
    courtType.style.borderRadius = '20px';
    courtType.style.fontSize = '0.75rem';
    courtType.style.fontWeight = '600';
    courtType.style.color = '#fff';
    
    // Set badge color based on court type
    if (court.type === 'principal') {
        courtType.style.backgroundColor = '#0f1b30';
    } else if (court.type === 'senior') {
        courtType.style.backgroundColor = '#1e3a5f';
    } else if (court.type === 'district') {
        courtType.style.backgroundColor = '#345d8a';
    }
    
    // Style card content
    const cardContent = card.querySelector('.card-content');
    cardContent.style.padding = '1.5rem';
    
    // Style card title
    const cardTitle = cardContent.querySelector('h3');
    cardTitle.style.fontSize = '1.25rem';
    cardTitle.style.fontWeight = '600';
    cardTitle.style.marginBottom = '1rem';
    cardTitle.style.color = '#0f1b30';
    
    // Style card details
    const cardDetails = cardContent.querySelector('.card-details');
    cardDetails.style.marginBottom = '1.5rem';
    
    const detailItems = cardDetails.querySelectorAll('.detail-item');
    detailItems.forEach(item => {
        item.style.display = 'flex';
        item.style.alignItems = 'flex-start';
        item.style.gap = '0.75rem';
        item.style.marginBottom = '0.75rem';
        
        const icon = item.querySelector('i');
        icon.style.color = '#1e3a5f';
        icon.style.fontSize = '0.875rem';
        icon.style.marginTop = '0.25rem';
        
        const text = item.querySelector('span');
        text.style.fontSize = '0.875rem';
        text.style.color = '#6c757d';
    });
    
    // Style services section
    const cardServices = cardContent.querySelector('.card-services');
    cardServices.style.marginBottom = '1.5rem';
    
    const servicesTitle = cardServices.querySelector('h4');
    servicesTitle.style.fontSize = '1rem';
    servicesTitle.style.fontWeight = '600';
    servicesTitle.style.marginBottom = '0.75rem';
    servicesTitle.style.color = '#0f1b30';
    
    const servicesList = cardServices.querySelector('.services-list');
    servicesList.style.display = 'flex';
    servicesList.style.flexWrap = 'wrap';
    servicesList.style.gap = '0.5rem';
    
    const serviceTags = servicesList.querySelectorAll('.service-tag');
    serviceTags.forEach(tag => {
        tag.style.padding = '0.25rem 0.75rem';
        tag.style.borderRadius = '20px';
        tag.style.fontSize = '0.75rem';
        tag.style.backgroundColor = '#f8f9fa';
        tag.style.color = '#1e3a5f';
    });
    
    // Style card actions
    const cardActions = cardContent.querySelector('.card-actions');
    cardActions.style.display = 'flex';
    cardActions.style.gap = '1rem';
    
    const cardButtons = cardActions.querySelectorAll('.card-action');
    cardButtons.forEach(button => {
        button.style.flex = '1';
        button.style.display = 'flex';
        button.style.alignItems = 'center';
        button.style.justifyContent = 'center';
        button.style.gap = '0.5rem';
        button.style.padding = '0.75rem';
        button.style.borderRadius = '6px';
        button.style.textDecoration = 'none';
        button.style.fontWeight = '600';
        button.style.fontSize = '0.875rem';
        button.style.transition = 'all 0.3s ease';
    });
    
    const directionsButton = cardActions.querySelector('.directions');
    directionsButton.style.backgroundColor = '#e58e26';
    directionsButton.style.color = '#fff';
    
    directionsButton.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#f7a443';
    });
    
    directionsButton.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '#e58e26';
    });
    
    const detailsButton = cardActions.querySelector('.details');
    detailsButton.style.backgroundColor = '#f8f9fa';
    detailsButton.style.color = '#0f1b30';
    
    detailsButton.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#e9ecef';
    });
    
    detailsButton.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '#f8f9fa';
    });
    
    // Add button event listeners
    directionsButton.addEventListener('click', function(e) {
        e.preventDefault();
        alert(`In a real implementation, this would show directions to ${court.name}`);
    });
    
    detailsButton.addEventListener('click', function(e) {
        e.preventDefault();
        alert(`In a real implementation, this would show more details about ${court.name}`);
    });
    
    return card;
}

/**
 * Format court type for display
 */
function formatCourtType(type) {
    switch (type) {
        case 'principal':
            return 'Principal';
        case 'senior':
            return 'Senior';
        case 'district':
            return 'District';
        default:
            return type.charAt(0).toUpperCase() + type.slice(1);
    }
}

/**
 * Initialize court search functionality
 */
function initCourtsSearch(courtsGrid, courts) {
    const searchInput = document.getElementById('courtSearch');
    if (!searchInput) return;
    
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim().toLowerCase();
        
        // Get all court cards
        const courtCards = courtsGrid.querySelectorAll('.court-card');
        
        // Filter cards
        courtCards.forEach(card => {
            const courtId = card.getAttribute('data-id');
            const court = courts.find(c => c.id === courtId);
            
            // Check if court matches search term
            const nameMatch = court.name.toLowerCase().includes(searchTerm);
            const addressMatch = court.address.toLowerCase().includes(searchTerm);
            const servicesMatch = court.services.some(service => service.toLowerCase().includes(searchTerm));
            
            // Show or hide card based on search
            if (nameMatch || addressMatch || servicesMatch || searchTerm === '') {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
    
    // Add search button functionality
    const searchBtn = searchInput.nextElementSibling;
    if (searchBtn) {
        searchBtn.addEventListener('click', function() {
            // Trigger the input event
            const event = new Event('input');
            searchInput.dispatchEvent(event);
        });
    }
}

/**
 * Initialize court sorting functionality
 */
function initCourtsSorting(courtsGrid, courts) {
    const sortSelect = document.getElementById('sortCourts');
    if (!sortSelect) return;
    
    sortSelect.addEventListener('change', function() {
        const sortBy = this.value;
        
        // Get all court cards
        const courtCards = Array.from(courtsGrid.querySelectorAll('.court-card'));
        
        // Sort cards
        courtCards.sort((a, b) => {
            const aId = a.getAttribute('data-id');
            const bId = b.getAttribute('data-id');
            const courtA = courts.find(c => c.id === aId);
            const courtB = courts.find(c => c.id === bId);
            
            if (sortBy === 'name') {
                return courtA.name.localeCompare(courtB.name);
            } else if (sortBy === 'type') {
                // Sort by type (principal, senior, district) and then by name
                const typeOrder = { principal: 1, senior: 2, district: 3 };
                if (typeOrder[courtA.type] !== typeOrder[courtB.type]) {
                    return typeOrder[courtA.type] - typeOrder[courtB.type];
                } else {
                    return courtA.name.localeCompare(courtB.name);
                }
            } else if (sortBy === 'region') {
                // Sort by region and then by name
                if (courtA.region !== courtB.region) {
                    return courtA.region.localeCompare(courtB.region);
                } else {
                    return courtA.name.localeCompare(courtB.name);
                }
            }
            
            return 0;
        });
        
        // Reappend cards in sorted order
        courtCards.forEach(card => {
            courtsGrid.appendChild(card);
        });
    });
}

/**
 * Jurisdiction Tabs
 */
function initJurisdictionTabs() {
    const tabsContainer = document.querySelector('.jurisdiction-tabs');
    if (!tabsContainer) return;
    
    const tabs = tabsContainer.querySelectorAll('.j-tab');
    const tabContents = document.querySelectorAll('.j-content');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Show the corresponding content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Case Filing Wizard
 */
function initCaseWizard() {
    const wizardContainer = document.querySelector('.wizard-container');
    if (!wizardContainer) return;
    
    const progressFill = document.getElementById('wizardProgress');
    const steps = document.querySelectorAll('.wizard-step');
    const stepIndicators = document.querySelectorAll('.step[data-step]');
    
    // Buttons for step navigation
    const step1Next = document.getElementById('step1Next');
    const step2Prev = document.getElementById('step2Prev');
    const step2Next = document.getElementById('step2Next');
    const step3Prev = document.getElementById('step3Prev');
    const step3Next = document.getElementById('step3Next');
    const wizardRestart = document.getElementById('wizardRestart');
    
    // Current step
    let currentStep = 0;
    
    // Value slider functionality
    initValueSlider();
    
    // Step 1: Case Type Selection
    if (step1Next) {
        // Enable/disable next button based on selection
        const caseTypeRadios = document.querySelectorAll('input[name="caseType"]');
        caseTypeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                step1Next.disabled = false;
                
                // Store the selected case type
                const selectedType = this.value;
                
                // Show the appropriate value section in step 2
                const civilValueSection = document.getElementById('civilValueSection');
                const criminalValueSection = document.getElementById('criminalValueSection');
                const otherValueSection = document.getElementById('otherValueSection');
                
                switch (selectedType) {
                    case 'civil':
                        civilValueSection.style.display = 'block';
                        criminalValueSection.style.display = 'none';
                        otherValueSection.style.display = 'none';
                        break;
                    case 'criminal':
                        civilValueSection.style.display = 'none';
                        criminalValueSection.style.display = 'block';
                        otherValueSection.style.display = 'none';
                        break;
                    default:
                        civilValueSection.style.display = 'none';
                        criminalValueSection.style.display = 'none';
                        otherValueSection.style.display = 'block';
                }
            });
        });
        
        // Next button click
        step1Next.addEventListener('click', function() {
            goToStep(1);
        });
    }
    
    // Step 2: Case Value
    if (step2Prev) {
        step2Prev.addEventListener('click', function() {
            goToStep(0);
        });
    }
    
    if (step2Next) {
        step2Next.addEventListener('click', function() {
            goToStep(2);
        });
    }
    
    // Step 3: Location
    if (step3Prev) {
        step3Prev.addEventListener('click', function() {
            goToStep(1);
        });
    }
    
    if (step3Next) {
        step3Next.addEventListener('click', function() {
            // Generate results
            generateResults();
            goToStep(3);
        });
    }
    
    // Automatic location button
    const locateAutoBtn = document.querySelector('.btn-locate-auto');
    if (locateAutoBtn) {
        locateAutoBtn.addEventListener('click', function() {
            // In a real implementation, this would use the browser's geolocation API
            // For demo, we'll just select a random region and town
            
            const regions = ['hhohho', 'manzini', 'lubombo', 'shiselweni'];
            const towns = ['mbabane', 'manzini', 'nhlangano', 'siteki', 'piggsPeak', 'hlatikulu', 'simunye'];
            
            const randomRegion = regions[Math.floor(Math.random() * regions.length)];
            const randomTown = towns[Math.floor(Math.random() * towns.length)];
            
            // Update the selects
            const regionSelect = document.getElementById('regionSelect');
            const townSelect = document.getElementById('townSelect');
            
            if (regionSelect) {
                regionSelect.value = randomRegion;
            }
            
            if (townSelect) {
                townSelect.value = randomTown;
            }
            
            alert('Location detected (simulated for demo purposes)');
        });
    }
    
    // Restart button
    if (wizardRestart) {
        wizardRestart.addEventListener('click', function() {
            resetWizard();
            goToStep(0);
        });
    }
    
    // Result download button
    const resultDownload = document.getElementById('resultDownload');
    if (resultDownload) {
        resultDownload.addEventListener('click', function(e) {
            e.preventDefault();
            alert('In a real implementation, this would download a PDF guide for filing your case');
        });
    }
    
    // Step indicator click
    stepIndicators.forEach(indicator => {
        indicator.addEventListener('click', function() {
            const step = parseInt(this.getAttribute('data-step')) - 1;
            
            // Only allow navigation to steps that have been visited
            if (step <= currentStep) {
                goToStep(step);
            }
        });
    });
    
    // Navigate to a specific step
    function goToStep(step) {
        // Hide all steps
        steps.forEach(s => {
            s.classList.remove('active');
        });
        
        // Show current step
        steps[step].classList.add('active');
        
        // Update progress
        updateProgress(step);
        
        // Update current step
        currentStep = step;
    }
    
    // Update progress indicators
    function updateProgress(step) {
        const progress = ((step + 1) / steps.length) * 100;
        progressFill.style.width = `${progress}%`;
        
        // Update step indicators
        stepIndicators.forEach(indicator => {
            const indicatorStep = parseInt(indicator.getAttribute('data-step'));
            
            // Reset classes
            indicator.classList.remove('active', 'completed');
            
            // Set appropriate class
            if (indicatorStep - 1 === step) {
                indicator.classList.add('active');
            } else if (indicatorStep - 1 < step) {
                indicator.classList.add('completed');
            }
        });
    }
    
    // Reset the wizard
    function resetWizard() {
        // Clear all form inputs
        const radioInputs = document.querySelectorAll('input[type="radio"]');
        radioInputs.forEach(input => {
            input.checked = false;
        });
        
        const numberInputs = document.querySelectorAll('input[type="number"]');
        numberInputs.forEach(input => {
            input.value = '';
        });
        
        const selectInputs = document.querySelectorAll('select');
        selectInputs.forEach(select => {
            select.selectedIndex = 0;
        });
        
        // Reset value slider
        const sliderThumb = document.querySelector('.slider-thumb');
        const sliderFill = document.querySelector('.slider-fill');
        if (sliderThumb && sliderFill) {
            sliderThumb.style.left = '0';
            sliderFill.style.width = '0';
        }
        
        // Disable next button in step 1
        if (step1Next) {
            step1Next.disabled = true;
        }
        
        // Hide all value sections in step 2
        const civilValueSection = document.getElementById('civilValueSection');
        const criminalValueSection = document.getElementById('criminalValueSection');
        const otherValueSection = document.getElementById('otherValueSection');
        
        if (civilValueSection) civilValueSection.style.display = 'none';
        if (criminalValueSection) criminalValueSection.style.display = 'none';
        if (otherValueSection) otherValueSection.style.display = 'none';
    }
    
    // Initialize value slider
    function initValueSlider() {
        const slider = document.querySelector('.value-slider');
        if (!slider) return;
        
        const sliderThumb = slider.querySelector('.slider-thumb');
        const sliderFill = slider.querySelector('.slider-fill');
        const caseValueInput = document.getElementById('caseValue');
        
        let isDragging = false;
        
        // Handle mouse/touch events on the slider
        slider.addEventListener('mousedown', startDrag);
        slider.addEventListener('touchstart', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('touchmove', drag);
        document.addEventListener('mouseup', endDrag);
        document.addEventListener('touchend', endDrag);
        
        // Update slider when input value changes
        if (caseValueInput) {
            caseValueInput.addEventListener('input', function() {
                updateSliderFromInput(this.value);
            });
        }
        
        function startDrag(e) {
            e.preventDefault();
            isDragging = true;
            updateSliderPosition(e);
        }
        
        function drag(e) {
            if (!isDragging) return;
            updateSliderPosition(e);
        }
        
        function endDrag() {
            isDragging = false;
        }
        
        function updateSliderPosition(e) {
            const rect = slider.getBoundingClientRect();
            const clientX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
            
            // Calculate position as percentage
            let position = (clientX - rect.left) / rect.width;
            position = Math.max(0, Math.min(1, position));
            
            // Update thumb and fill
            sliderThumb.style.left = `${position * 100}%`;
            sliderFill.style.width = `${position * 100}%`;
            
            // Update input value (0 to 100000)
            const value = Math.round(position * 100000);
            if (caseValueInput) {
                caseValueInput.value = value;
            }
        }
        
        function updateSliderFromInput(value) {
            // Convert value to percentage (0 to 100000)
            const position = Math.min(1, value / 100000);
            
            // Update thumb and fill
            sliderThumb.style.left = `${position * 100}%`;
            sliderFill.style.width = `${position * 100}%`;
        }
    }
    
    // Generate filing result
    function generateResults() {
        const resultContainer = document.getElementById('filingResult');
        if (!resultContainer) return;
        
        // Get form values
        const caseType = document.querySelector('input[name="caseType"]:checked')?.value || '';
        const caseValue = document.getElementById('caseValue')?.value || 0;
        const criminalSeverity = document.querySelector('input[name="criminalSeverity"]:checked')?.value || '';
        const region = document.getElementById('regionSelect')?.value || '';
        const town = document.getElementById('townSelect')?.value || '';
        
        // Determine the appropriate court based on case type, value, and location
        let courtName = '';
        let courtType = '';
        let courtAddress = '';
        let registryContact = '';
        let filingFee = '';
        let requirements = [];
        
        // Logic to determine the appropriate court
        if (caseType === 'civil') {
            if (caseValue > 50000) {
                courtType = 'Principal Magistrate Court';
                requirements = [
                    'Completed Civil Summons (Form MC-1)',
                    'Particulars of Claim (Form MC-2)',
                    'Supporting documents relevant to your claim',
                    'Filing fee receipt',
                    'Valid ID document'
                ];
                filingFee = 'E300 - E500 (based on claim value)';
            } else if (caseValue > 20000) {
                courtType = 'Senior Magistrate Court';
                requirements = [
                    'Completed Civil Summons (Form MC-1)',
                    'Particulars of Claim (Form MC-2)',
                    'Supporting documents relevant to your claim',
                    'Filing fee receipt',
                    'Valid ID document'
                ];
                filingFee = 'E200 - E300 (based on claim value)';
            } else {
                courtType = 'District Magistrate Court';
                requirements = [
                    'Completed Civil Summons (Form MC-1)',
                    'Particulars of Claim (Form MC-2)',
                    'Supporting documents relevant to your claim',
                    'Filing fee receipt',
                    'Valid ID document'
                ];
                filingFee = 'E100 - E200 (based on claim value)';
            }
        } else if (caseType === 'criminal') {
            if (criminalSeverity === 'verySerious') {
                courtType = 'Principal Magistrate Court';
                requirements = [
                    'Completed Criminal Complaint Form',
                    'Witness statements (if available)',
                    'Evidence documentation',
                    'Medical reports (if applicable)',
                    'Valid ID document'
                ];
                filingFee = 'No fee for criminal complaints';
            } else if (criminalSeverity === 'serious') {
                courtType = 'Principal Magistrate Court';
                requirements = [
                    'Completed Criminal Complaint Form',
                    'Witness statements (if available)',
                    'Evidence documentation',
                    'Valid ID document'
                ];
                filingFee = 'No fee for criminal complaints';
            } else if (criminalSeverity === 'moderate') {
                courtType = 'Senior Magistrate Court';
                requirements = [
                    'Completed Criminal Complaint Form',
                    'Witness statements (if available)',
                    'Evidence documentation',
                    'Valid ID document'
                ];
                filingFee = 'No fee for criminal complaints';
            } else {
                courtType = 'District Magistrate Court';
                requirements = [
                    'Completed Criminal Complaint Form',
                    'Witness statements (if available)',
                    'Evidence documentation',
                    'Valid ID document'
                ];
                filingFee = 'No fee for criminal complaints';
            }
        } else if (caseType === 'protection') {
            courtType = 'Any Magistrate Court';
            requirements = [
                'Completed Protection Order Application (Form MC-P1)',
                'Supporting affidavit detailing the abuse or harassment',
                'Evidence documentation (photos, messages, etc. if available)',
                'Medical reports (if applicable)',
                'Valid ID document'
            ];
            filingFee = 'No fee for protection order applications';
        } else if (caseType === 'maintenance') {
            courtType = 'Any Magistrate Court';
            requirements = [
                'Completed Maintenance Application Form',
                'Birth certificates of children (if applicable)',
                'Proof of income and expenses',
                'Supporting affidavit',
                'Valid ID document'
            ];
            filingFee = 'No fee for maintenance applications';
        } else if (caseType === 'eviction') {
            if (caseValue > 50000) {
                courtType = 'Principal Magistrate Court';
            } else if (caseValue > 20000) {
                courtType = 'Senior Magistrate Court';
            } else {
                courtType = 'District Magistrate Court';
            }
            requirements = [
                'Completed Eviction Application Form',
                'Copy of lease agreement',
                'Proof of ownership of property',
                'Evidence of lease violations or non-payment',
                'Demand notices sent to tenant',
                'Valid ID document'
            ];
            filingFee = 'E200 - E400 (based on rental value)';
        } else {
            courtType = 'Nearest Magistrate Court';
            requirements = [
                'Completed appropriate application form',
                'Supporting documentation',
                'Valid ID document'
            ];
            filingFee = 'Varies based on application type';
        }
        
        // Determine the specific court based on location
        if (town) {
            switch (town) {
                case 'mbabane':
                    courtName = 'Mbabane Principal Magistrate Court';
                    courtAddress = 'Hospital Hill, Mbabane';
                    registryContact = '+268 2404 2501';
                    break;
                case 'manzini':
                    courtName = 'Manzini Principal Magistrate Court';
                    courtAddress = 'Main Street, Manzini';
                    registryContact = '+268 2505 2201';
                    break;
                case 'nhlangano':
                    courtName = 'Nhlangano Senior Magistrate Court';
                    courtAddress = 'Main Road, Nhlangano';
                    registryContact = '+268 2207 7301';
                    break;
                case 'siteki':
                    courtName = 'Siteki Senior Magistrate Court';
                    courtAddress = 'Main Street, Siteki';
                    registryContact = '+268 2343 4101';
                    break;
                case 'piggsPeak':
                    courtName = 'Pigg\'s Peak District Magistrate Court';
                    courtAddress = 'Main Road, Pigg\'s Peak';
                    registryContact = '+268 2431 2201';
                    break;
                case 'hlatikulu':
                    courtName = 'Hlatikulu District Magistrate Court';
                    courtAddress = 'Main Street, Hlatikulu';
                    registryContact = '+268 2217 7401';
                    break;
                case 'simunye':
                    courtName = 'Simunye District Magistrate Court';
                    courtAddress = 'Main Road, Simunye';
                    registryContact = '+268 2363 8101';
                    break;
                default:
                    courtName = 'Nearest Magistrate Court';
                    courtAddress = 'Please contact the court registry for directions';
                    registryContact = '+268 2404 2501';
            }
        } else if (region) {
            switch (region) {
                case 'hhohho':
                    courtName = 'Mbabane Principal Magistrate Court';
                    courtAddress = 'Hospital Hill, Mbabane';
                    registryContact = '+268 2404 2501';
                    break;
                case 'manzini':
                    courtName = 'Manzini Principal Magistrate Court';
                    courtAddress = 'Main Street, Manzini';
                    registryContact = '+268 2505 2201';
                    break;
                case 'shiselweni':
                    courtName = 'Nhlangano Senior Magistrate Court';
                    courtAddress = 'Main Road, Nhlangano';
                    registryContact = '+268 2207 7301';
                    break;
                case 'lubombo':
                    courtName = 'Siteki Senior Magistrate Court';
                    courtAddress = 'Main Street, Siteki';
                    registryContact = '+268 2343 4101';
                    break;
                default:
                    courtName = 'Nearest Magistrate Court';
                    courtAddress = 'Please contact the court registry for directions';
                    registryContact = '+268 2404 2501';
            }
        } else {
            courtName = 'Nearest Magistrate Court';
            courtAddress = 'Please contact the court registry for directions';
            registryContact = '+268 2404 2501';
        }
        
        // Create result content
        const resultHTML = `
            <div class="result-court">
                <div class="result-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="result-details">
                    <h3>${courtName}</h3>
                    <p class="court-type">${courtType}</p>
                    <div class="court-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>${courtAddress}</span>
                    </div>
                    <div class="court-contact">
                        <i class="fas fa-phone-alt"></i>
                        <span>${registryContact}</span>
                    </div>
                </div>
            </div>
            
            <div class="result-info">
                <div class="info-section">
                    <h4>Filing Fee</h4>
                    <p>${filingFee}</p>
                </div>
                
                <div class="info-section">
                    <h4>Required Documents</h4>
                    <ul class="requirements-list">
                        ${requirements.map(req => `<li>${req}</li>`).join('')}
                    </ul>
                </div>
                
                <div class="info-section">
                    <h4>Next Steps</h4>
                    <ol class="steps-list">
                        <li>Gather all required documents listed above</li>
                        <li>Visit the court registry during office hours (8:00 AM - 4:30 PM, Mon-Fri)</li>
                        <li>Submit your documents and pay the filing fee</li>
                        <li>Receive your case number and hearing date</li>
                        <li>Serve documents on the other party as instructed by the court</li>
                    </ol>
                </div>
            </div>
        `;
        
        // Update result container
        resultContainer.innerHTML = resultHTML;
        
        // Style the result
        const resultCourt = resultContainer.querySelector('.result-court');
        resultCourt.style.display = 'flex';
        resultCourt.style.alignItems = 'flex-start';
        resultCourt.style.gap = '1.5rem';
        resultCourt.style.marginBottom = '2rem';
        resultCourt.style.padding = '1.5rem';
        resultCourt.style.backgroundColor = '#fff';
        resultCourt.style.borderRadius = '8px';
        resultCourt.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
        
        const resultIcon = resultContainer.querySelector('.result-icon');
        resultIcon.style.width = '60px';
        resultIcon.style.height = '60px';
        resultIcon.style.backgroundColor = '#0f1b30';
        resultIcon.style.borderRadius = '50%';
        resultIcon.style.display = 'flex';
        resultIcon.style.alignItems = 'center';
        resultIcon.style.justifyContent = 'center';
        resultIcon.style.color = '#e58e26';
        resultIcon.style.fontSize = '1.75rem';
        resultIcon.style.flexShrink = '0';
        
        const resultDetails = resultContainer.querySelector('.result-details');
        resultDetails.style.flex = '1';
        
        resultDetails.querySelector('h3').style.fontSize = '1.5rem';
        resultDetails.querySelector('h3').style.marginBottom = '0.25rem';
        resultDetails.querySelector('h3').style.color = '#0f1b30';
        
        const courtTypeEl = resultDetails.querySelector('.court-type');
        courtTypeEl.style.fontSize = '1rem';
        courtTypeEl.style.color = '#1e3a5f';
        courtTypeEl.style.fontWeight = '600';
        courtTypeEl.style.marginBottom = '1rem';
        
        const addressEl = resultDetails.querySelector('.court-address');
        addressEl.style.display = 'flex';
        addressEl.style.alignItems = 'flex-start';
        addressEl.style.gap = '0.5rem';
        addressEl.style.marginBottom = '0.5rem';
        
        addressEl.querySelector('i').style.color = '#1e3a5f';
        addressEl.querySelector('i').style.marginTop = '0.25rem';
        
        addressEl.querySelector('span').style.fontSize = '0.9375rem';
        addressEl.querySelector('span').style.color = '#6c757d';
        
        const contactEl = resultDetails.querySelector('.court-contact');
        contactEl.style.display = 'flex';
        contactEl.style.alignItems = 'flex-start';
        contactEl.style.gap = '0.5rem';
        
        contactEl.querySelector('i').style.color = '#1e3a5f';
        contactEl.querySelector('i').style.marginTop = '0.25rem';
        
        contactEl.querySelector('span').style.fontSize = '0.9375rem';
        contactEl.querySelector('span').style.color = '#6c757d';
        
        const resultInfo = resultContainer.querySelector('.result-info');
        resultInfo.style.backgroundColor = '#fff';
        resultInfo.style.borderRadius = '8px';
        resultInfo.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
        resultInfo.style.padding = '1.5rem';
        
        const infoSections = resultInfo.querySelectorAll('.info-section');
        infoSections.forEach((section, index) => {
            section.style.marginBottom = index === infoSections.length - 1 ? '0' : '1.5rem';
            
            section.querySelector('h4').style.fontSize = '1.25rem';
            section.querySelector('h4').style.marginBottom = '0.75rem';
            section.querySelector('h4').style.color = '#0f1b30';
            
            if (section.querySelector('p')) {
                section.querySelector('p').style.fontSize = '1rem';
                section.querySelector('p').style.color = '#6c757d';
            }
        });
        
        const requirementsList = resultInfo.querySelector('.requirements-list');
        requirementsList.style.paddingLeft = '1.5rem';
        requirementsList.style.marginBottom = '0';
        
        const requirementItems = requirementsList.querySelectorAll('li');
        requirementItems.forEach(item => {
            item.style.marginBottom = '0.5rem';
            item.style.color = '#6c757d';
        });
        
        const stepsList = resultInfo.querySelector('.steps-list');
        stepsList.style.paddingLeft = '1.5rem';
        stepsList.style.marginBottom = '0';
        
        const stepItems = stepsList.querySelectorAll('li');
        stepItems.forEach(item => {
            item.style.marginBottom = '0.5rem';
            item.style.color = '#6c757d';
        });
    }
}

/**
 * Documents Tabs
 */
function initDocumentsTabs() {
    const tabsContainer = document.querySelector('.documents-tabs');
    if (!tabsContainer) return;
    
    const tabs = tabsContainer.querySelectorAll('.doc-tab');
    const tabContents = document.querySelectorAll('.doc-content');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Show the corresponding content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Pagination functionality
    const paginationLinks = document.querySelectorAll('.documents-pagination a');
    paginationLinks.forEach(link => {
        if (link.classList.contains('disabled')) return;
        
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all page links
            document.querySelectorAll('.pagination-number').forEach(num => {
                num.classList.remove('active');
            });
            
            // Add active class if it's a page number
            if (this.classList.contains('pagination-number')) {
                this.classList.add('active');
            }
            
            // Simulate page change (in a real implementation, this would load new documents)
            alert('In a real implementation, this would navigate to a different page of documents');
        });
    });
}

/**
 * Documents Search and Filter
 */
function initDocumentsSearch() {
    const searchInputs = document.querySelectorAll('.documents-content .search-box input');
    searchInputs.forEach(input => {
        const searchBtn = input.nextElementSibling;
        
        // Search on button click
        if (searchBtn) {
            searchBtn.addEventListener('click', function() {
                performSearch(input);
            });
        }
        
        // Search on enter key
        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch(this);
            }
        });
    });
    
    // Filter dropdown change
    const filterDropdowns = document.querySelectorAll('.documents-content .filter-dropdown select');
    filterDropdowns.forEach(dropdown => {
        dropdown.addEventListener('change', function() {
            const selectedCategory = this.value;
            // In a real implementation, this would filter the documents
            console.log('Filter by category:', selectedCategory);
            
            alert(`In a real implementation, this would filter documents by "${selectedCategory}" category`);
        });
    });
    
    function performSearch(input) {
        const searchTerm = input.value.trim();
        if (searchTerm === '') return;
        
        // In a real implementation, this would search the documents
        console.log('Search term:', searchTerm);
        
        alert(`In a real implementation, this would search for documents matching "${searchTerm}"`);
    }
}

/**
 * Court Officials Filter
 */
function initOfficialsFilter() {
    const officialsGrid = document.getElementById('officialsGrid');
    if (!officialsGrid) return;
    
    // Mock officials data (in a real implementation, this would be fetched from an API)
    const officials = [
        {
            name: 'Hon. Sipho Dlamini',
            title: 'Principal Magistrate',
            court: 'Mbabane Principal Magistrate Court',
            type: 'principal',
            bio: 'Hon. Dlamini has served as a magistrate for over 15 years, specializing in criminal law.',
            image: 'assets/images/officials/magistrate1.jpg'
        },
        {
            name: 'Hon. Thandi Nkosi',
            title: 'Principal Magistrate',
            court: 'Manzini Principal Magistrate Court',
            type: 'principal',
            bio: 'Hon. Nkosi has extensive experience in civil litigation and commercial disputes.',
            image: 'assets/images/officials/magistrate2.jpg'
        },
        {
            name: 'Hon. Musa Zwane',
            title: 'Senior Magistrate',
            court: 'Nhlangano Senior Magistrate Court',
            type: 'senior',
            bio: 'Hon. Zwane specializes in family law and domestic violence cases.',
            image: 'assets/images/officials/magistrate3.jpg'
        },
        {
            name: 'Hon. Nomcebo Shabangu',
            title: 'Senior Magistrate',
            court: 'Siteki Senior Magistrate Court',
            type: 'senior',
            bio: 'Hon. Shabangu has a background in labor law and handles complex civil matters.',
            image: 'assets/images/officials/magistrate4.jpg'
        },
        {
            name: 'Hon. Bongani Simelane',
            title: 'District Magistrate',
            court: 'Pigg\'s Peak District Magistrate Court',
            type: 'district',
            bio: 'Hon. Simelane has been serving the community for over 10 years.',
            image: 'assets/images/officials/magistrate5.jpg'
        },
        {
            name: 'Hon. Lindiwe Motsa',
            title: 'District Magistrate',
            court: 'Hlatikulu District Magistrate Court',
            type: 'district',
            bio: 'Hon. Motsa specializes in land disputes and customary law.',
            image: 'assets/images/officials/magistrate6.jpg'
        },
        {
            name: 'Hon. Themba Masuku',
            title: 'District Magistrate',
            court: 'Simunye District Magistrate Court',
            type: 'district',
            bio: 'Hon. Masuku focuses on rural community access to justice.',
            image: 'assets/images/officials/magistrate7.jpg'
        },
        {
            name: 'Ms. Phindile Dube',
            title: 'Chief Court Administrator',
            court: 'Magistrate Courts Administration',
            type: 'administration',
            bio: 'Ms. Dube oversees the administrative functions of all magistrate courts.',
            image: 'assets/images/officials/admin1.jpg'
        }
    ];
    
    // Create official cards
    officials.forEach(official => {
        const officialCard = createOfficialCard(official);
        officialsGrid.appendChild(officialCard);
    });
    
    // Initialize filter buttons
    const filterButtons = document.querySelectorAll('.officials-filter .filter-btn');
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get filter value
            const filterValue = this.getAttribute('data-filter');
            
            // Filter officials
            const officialCards = officialsGrid.querySelectorAll('.official-card');
            officialCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-type') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

/**
 * Create official card
 */
function createOfficialCard(official) {
    // Create card element
    const card = document.createElement('div');
    card.className = 'official-card';
    card.setAttribute('data-type', official.type);
    
    // Create card content
    card.innerHTML = `
        <div class="official-image">
            <img src="${official.image}" alt="${official.name}">
        </div>
        <div class="official-info">
            <h3>${official.name}</h3>
            <div class="official-title">${official.title}</div>
            <div class="official-court">${official.court}</div>
            <p class="official-bio">${official.bio}</p>
        </div>
    `;
    
    // Style card
    card.style.background = '#fff';
    card.style.borderRadius = '8px';
    card.style.overflow = 'hidden';
    card.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
    card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
    
    // Add hover effect
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px)';
        this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.15)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
    });
    
    // Style image
    const officialImage = card.querySelector('.official-image');
    officialImage.style.height = '250px';
    officialImage.style.overflow = 'hidden';
    
    const image = officialImage.querySelector('img');
    image.style.width = '100%';
    image.style.height = '100%';
    image.style.objectFit = 'cover';
    image.style.transition = 'transform 0.5s ease';
    
    // Add hover effect for image
    card.addEventListener('mouseenter', function() {
        image.style.transform = 'scale(1.1)';
    });
    
    card.addEventListener('mouseleave', function() {
        image.style.transform = 'scale(1)';
    });
    
    // Style info
    const officialInfo = card.querySelector('.official-info');
    officialInfo.style.padding = '1.5rem';
    
    // Style name
    const name = officialInfo.querySelector('h3');
    name.style.fontSize = '1.25rem';
    name.style.fontWeight = '600';
    name.style.marginBottom = '0.5rem';
    name.style.color = '#0f1b30';
    
    // Style title
    const title = officialInfo.querySelector('.official-title');
    title.style.fontSize = '1rem';
    title.style.fontWeight = '600';
    title.style.color = '#1e3a5f';
    title.style.marginBottom = '0.25rem';
    
    // Style court
    const court = officialInfo.querySelector('.official-court');
    court.style.fontSize = '0.875rem';
    court.style.color = '#6c757d';
    court.style.marginBottom = '1rem';
    
    // Style bio
    const bio = officialInfo.querySelector('.official-bio');
    bio.style.fontSize = '0.9375rem';
    bio.style.color = '#6c757d';
    bio.style.lineHeight = '1.6';
    bio.style.margin = '0';
    
    return card;
}

/**
 * FAQ Functionality
 */
function initFaqSystem() {
    const faqList = document.getElementById('faqList');
    if (!faqList) return;
    
    // Initialize FAQ accordion
    const faqItems = faqList.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        
        // Set initial height for animation
        answer.style.maxHeight = '0px';
        
        question.addEventListener('click', function() {
            // Toggle active class
            const isActive = item.classList.contains('active');
            
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = '0px';
                    otherItem.querySelector('.question-toggle i').className = 'fas fa-plus';
                }
            });
            
            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
                answer.style.maxHeight = '0px';
                item.querySelector('.question-toggle i').className = 'fas fa-plus';
            } else {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                item.querySelector('.question-toggle i').className = 'fas fa-minus';
            }
        });
    });
    
    // Initialize FAQ search
    const faqSearch = document.getElementById('faqSearch');
    if (faqSearch) {
        faqSearch.addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();
            
            if (searchTerm === '') {
                // Show all items if search is empty
                faqItems.forEach(item => {
                    item.style.display = 'block';
                });
                return;
            }
            
            // Filter items based on search term
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
        
        // Add search button functionality
        const searchBtn = document.querySelector('.faq-search .search-btn');
        if (searchBtn) {
            searchBtn.addEventListener('click', function() {
                // Trigger the input event
                const event = new Event('input');
                faqSearch.dispatchEvent(event);
            });
        }
    }
    
    // Initialize FAQ categories
    const categoryButtons = document.querySelectorAll('.faq-categories .category-btn');
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get category value
            const category = this.getAttribute('data-category');
            
            // Filter items based on category
            faqItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

/**
 * Contact Form Handling
 */
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) return;
    
    // Generate random captcha
    generateCaptcha();
    
    // Add refresh captcha button functionality
    const refreshBtn = document.querySelector('.btn-refresh-captcha');
    if (refreshBtn) {
        refreshBtn.addEventListener('click', generateCaptcha);
    }
    
    // Form submission
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        const captcha = document.getElementById('captcha').value;
        const captchaText = document.querySelector('.captcha-text').textContent;
        
        // Validate captcha
        if (captcha !== captchaText) {
            alert('Incorrect captcha. Please try again.');
            return;
        }
        
        // In a real implementation, this would send the form data to a server
        console.log('Form submitted:', { fullName, email, phone, subject, message });
        
        // Show success message
        alert('Your message has been sent successfully. We will get back to you soon.');
        
        // Reset form
        contactForm.reset();
        generateCaptcha();
    });
    
    function generateCaptcha() {
        // Generate random alphanumeric string
        const characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        let captcha = '';
        
        for (let i = 0; i < 6; i++) {
            captcha += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        
        // Update captcha text
        const captchaText = document.querySelector('.captcha-text');
        if (captchaText) {
            captchaText.textContent = captcha;
        }
    }
}

/**
 * Animations and UI Effects
 */
function initAnimations() {
    // Animate elements when they enter viewport
    const animateElements = document.querySelectorAll('.level-item, .j-card, .proc-item, .service-card, .guide-card, .resource-card');
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    
    // Observe elements
    animateElements.forEach(element => {
        // Set initial state
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        // Add staggered delay based on element index
        const siblings = Array.from(element.parentElement.children);
        const index = siblings.indexOf(element);
        element.style.transitionDelay = `${index * 0.1}s`;
        
        // Observe element
        observer.observe(element);
    });
    
    // Define animation class
    const style = document.createElement('style');
    style.textContent = `
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    `;
    document.head.appendChild(style);
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || !targetId) return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Parallax effect for hero section
    const heroSection = document.querySelector('.magistrate-hero');
    if (heroSection) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            const parallaxSpeed = 0.4;
            
            heroSection.style.backgroundPositionY = `${scrollPosition * parallaxSpeed}px`;
        });
    }
}