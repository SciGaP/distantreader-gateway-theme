<div class="container">
  <h2 class="text-center">Metagenomes</h2>
    <hr class="separation-line blue-bg"/>

    <p style="font-size:18px; margin-top:20px;">
    We have scoured the sequence read archive to identify those data sets that are random metagenomic sequences. There are two popular approaches often called metagenomics: First, amplicon sequencing includes amplifying a single piece of DNA (e.g. the 16S gene from bacteria or COX1 gene from eukaryotes), and sequencing that gene en masse. These studies provide a taxonomic profile of an environment but don’t tell you what is happening in that environment. We don’t include those data here. The second type of study, whole shotgun (WGS) metagenomics, is where random samples of the microbial genomes in the environment are sequenced, usually without amplification, and results in a mixture of all the DNA in the sample. These studies give a holistic understanding of bacterial communities and are the focus of the data we have available for you here.
    </p>
    <p style="font-size:18px; margin-top:20px;">
    Over the last decade, metagenomics sequencing has focused on understanding the role of microbes in the environment and reconstructing genomes out of environmental sequences. The growth of the SRA, however, allows us to think in fundamentally different ways. With the abundance of random sequences from diverse environments in a single repository, instead of asking what genomes or metabolisms are found in a particular environment, we can ask what environments contain a gene, protein, genome, or metabolism of interest.
    </p>
    <p style="font-size:18px; margin-top:20px;">
    This massive volume of data could also be used to identify genes that are conserved across environments, or environments that are hotspots of microbial or gene diversification. However, this kind of computational approach to microbial ecology requires large compute and storage capabilities, that we are providing here thanks to support of XSEDE and the NSF. The WGS projects in the SRA are accumulating at ~3,000 runs per month (averaged from June 2016–June 2017), and the combined WGS data sets exceeds 100TB of data. At searchSRA.org our goal is to enable you to search this data for things you are interested in!
    </p>
    <p style="font-size:18px; margin-top:20px;">
    Using our high-throughput, automated, machine learning approach we identify the new metagenomics data sets that have been added to the sequence read archive and preprocess those to prepare them for searching. We extract 100,000 sequences from each file, approximately 1% of the data, and use that as the input to our search.
    </p>
    <p style="font-size:18px; margin-top:20px;">
    We can only use 1% of the data because even though we have <a href="https://www.xsede.org/">XSEDE’s</a> compute resources backing us up, we still want the search to complete in time.
    </p>
    <p style="font-size:18px; margin-top:20px;">
    What this means for you is that we are liable to false negatives in our search: when we demonstrate a sequence is present, it really is. However, if we do not report hits to a metagenome, it is possible that there are a few sequences in the metagenome that would match your query that we don’t report. That is the trade-off we have to make to get you results in a reasonable time!
    </p>
    <p style="font-size:18px; margin-top:20px;">
    <a href="pages/searchids/">Here is a list</a> of the current sequence data sets available.
    </p>
    <br></br>
    <p style="font-size:18px; margin-top:20px;">
    Register or login to get started searching.

    </p>
    </div>