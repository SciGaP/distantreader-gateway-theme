<div class="container">
  <h2 class="text-center">Nucleotide Searches</h2>
    <hr class="separation-line blue-bg"/>

    <p style="font-size:18px; margin-top:20px;">
    The SRA houses DNA sequences, and so for nucleotide:nucleotide searches we use <a href="http://bowtie-bio.sourceforge.net/bowtie2/index.shtml">bowtie2</a> to compare the fasta file of DNA sequences you upload against the set of SRA IDs of the metagenomes that you choose to search. We convert the output to binary sequence alignment format and provide you with a compressed zip file containing both the bam and bam index files for your downstream processing.

    <br></br>
    The command that we currently use for bowtie2 is:
    <p style="font-size:16px; margin-top:20px;"><b><i>
    bowtie2 -p 6 -q --no-unal -x SRAMG -U DATA | samtools view -bS - | samtools sort - OUTPUT
    </i></b></a>
    <br></br>
    <p style="font-size:18px; margin-top:20px;">
    SRAMG is one of our preprocessed <a href="/metagenomes">metagenomes</a>, and DATA is the fasta file that you upload.
    <br></br>
    Register or login to get started searching.

    </p>
    </div>